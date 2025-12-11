<?php
// functions.php
require_once __DIR__ . '/db.php';

// Mulai session hanya jika belum ada session yang aktif.
// Ini mencegah notice "session_start(): Ignoring session_start() because a session is already active".
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function flash($key, $msg = null){
    if($msg === null){
        if(isset($_SESSION['flash'][$key])){
            $m = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $m;
        }
        return null;
    } else {
        $_SESSION['flash'][$key] = $msg;
    }
}

/* ----- ADMIN AUTH ----- */
function is_admin_logged_in(){
    return isset($_SESSION['admin']);
}
function require_admin_login(){
    if(!is_admin_logged_in()){
        header('Location: ../index.php');
        exit;
    }
}
function login_admin($username, $password){
    $pdo = $GLOBALS['pdo'] ?? null;
    if(!$pdo) return false;
    $sql = "SELECT * FROM admin WHERE username = :u LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['u'=>$username]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    if($admin){
        if(isset($admin['password']) && password_verify($password, $admin['password'])){
            $_SESSION['admin'] = $admin;
            return true;
        }
        if(isset($admin['password']) && hash('sha256',$password) === $admin['password']){
            $_SESSION['admin'] = $admin;
            return true;
        }
    }
    return false;
}
function logout_admin(){
    unset($_SESSION['admin']);
}

/* ----- MAHASISWA (opsional jika buat sesi terpisah) ----- */
function is_mahasiswa_logged_in(){
    return isset($_SESSION['mahasiswa']);
}
function login_mahasiswa_by_nim($nim){
    $pdo = $GLOBALS['pdo'] ?? null;
    if(!$pdo) return false;
    $stmt = $pdo->prepare("SELECT * FROM mahasiswa WHERE nim = :n LIMIT 1");
    $stmt->execute(['n'=>$nim]);
    $m = $stmt->fetch(PDO::FETCH_ASSOC);
    if($m){
        $_SESSION['mahasiswa'] = $m;
        return true;
    }
    return false;
}
function logout_mahasiswa(){
    unset($_SESSION['mahasiswa']);
}

/* ---------------------------
   Helper: normalize image for PDF
   - menerima $path (relatif ke project root atau absolute)
   - jika file PNG (dgn alpha) dan GD tersedia -> konversi ke JPG (non-alpha)
   - kembalikan path file yang aman dipakai TCPDF
   NOTE: fungsi menggunakan GD; pastikan extension gd aktif di php.ini
---------------------------- */
function normalize_image_for_pdf(string $path): string {
    // terima path relatif (uploads/...) atau full path
    $full = $path;
    // jika path relatif seperti 'uploads/filename.png', ubah jadi absolute
    if (!file_exists($full)) {
        // coba relatif terhadap project root (__DIR__)
        $alt = __DIR__ . '/' . ltrim($path, '/\\');
        if (file_exists($alt)) $full = $alt;
    }

    if (!file_exists($full)) {
        // file tidak ditemukan — kembalikan path asli (TCPDF nanti akan error jika benar-benar tidak ada)
        return $path;
    }

    $ext = strtolower(pathinfo($full, PATHINFO_EXTENSION));
    // hanya konversi PNG (karena masalah alpha)
    if ($ext !== 'png') {
        return $full;
    }

    // cek GD functions tersedia
    if (!function_exists('imagecreatefrompng') || !function_exists('imagejpeg')) {
        // GD tidak tersedia -> kembalikan path asli
        return $full;
    }

    // buat nama file JPG baru di same folder
    $jpgFull = preg_replace('/\.png$/i', '.jpg', $full);
    // jika sudah ada JPG yang lebih baru / sama -> return jpg
    if (file_exists($jpgFull) && filemtime($jpgFull) >= filemtime($full)) {
        return $jpgFull;
    }

    // convert: buat background putih dan tulis sebagai JPEG
    try {
        $im = @imagecreatefrompng($full);
        if ($im === false) {
            return $full; // gagal load PNG
        }
        $w = imagesx($im);
        $h = imagesy($im);
        $bg = imagecreatetruecolor($w, $h);
        $white = imagecolorallocate($bg, 255, 255, 255);
        imagefill($bg, 0, 0, $white);
        imagecopy($bg, $im, 0, 0, 0, 0, $w, $h);
        // simpan JPG dengan kualitas 90
        imagejpeg($bg, $jpgFull, 90);
        imagedestroy($im);
        imagedestroy($bg);
        return $jpgFull;
    } catch (\Throwable $e) {
        // jika ada error, kembalikan path asli
        return $full;
    }
}
