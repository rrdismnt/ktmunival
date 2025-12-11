<?php
// config.php — Final (diperbaiki)
// -------------------------------------------------
// Konfigurasi database
define('DB_HOST', 'localhost');
define('DB_NAME', 'unival_ktm');
define('DB_USER', 'root');
define('DB_PASS', '');

// URL dasar aplikasi (ubah jika diperlukan)
define('BASE_URL', 'http://localhost/unival_ktm');

// Uploads
define('UPLOAD_DIR', __DIR__ . '/uploads/'); // pastikan folder ini ada dan writable oleh web server
define('MAX_UPLOAD_SIZE', 5 * 1024 * 1024);  // 5 MB

// -------------------------------------------------
// Pengaturan email (SMTP - Gmail App Password)
// Pastikan kamu sudah membuat App Password untuk akun SMTP_USER.
// App Password hanya bisa dibuat bila 2-Step Verification sudah diaktifkan.
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);            // 587 untuk TLS, 465 untuk SSL
define('SMTP_SECURE', 'tls');       // 'tls' atau 'ssl'

// AKUN SMTP: gunakan akun yang App Password-nya sudah kamu buat
define('SMTP_USER', 'rudyy.ismanto@gmail.com');
// GANTI nilai SMTP_PASS hanya kalau kamu ingin pakai app password lain.
// Nilai di bawah berdasarkan App Password yang kamu buat (rbqcexxsllucrafq).
// Jika ingin menyamarkan pada produksi, simpan di environment variable.
define('SMTP_PASS', 'rbqcexxsllucrafq');

define('MAIL_FROM', 'rudyy.ismanto@gmail.com');
// Nama pengirim — sesuai preferensi kamu (ingat: user preferensi "Rudstore")
define('MAIL_FROM_NAME', 'Admin KTM UNIVAL');

// Tampilkan debug PHPMailer? (true untuk development/testing, false untuk production)
define('SMTP_DEBUG', false);

// -------------------------------------------------
// Safety checks (opsional): coba buat folder uploads otomatis bila belum ada
if (!is_dir(UPLOAD_DIR)) {
    @mkdir(UPLOAD_DIR, 0755, true);
}

// End of config.php
