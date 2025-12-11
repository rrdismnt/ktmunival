<?php
// index.php (login admin)
require_once 'functions.php';
if(is_admin_logged_in()){
    header('Location: admin/dashboard.php');
    exit;
}
$msg = flash('msg');
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Login Admin - UNIVAL KTM</title>

<style>
    /* ====== GLOBAL ====== */
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;

        /* BACKGROUND DENGAN GAMBAR + GRADIENT BIRU */
        background:
            linear-gradient(
                rgba(74, 126, 204, 0.53),
                rgba(70, 101, 225, 0.66)
            ),
            url("gambar/GSG.jpg"); /* <-- ganti sesuai lokasi file gambarmu */
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

        /* efek blur halus (butuh browser modern) */
        backdrop-filter: blur(0.9px);

        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #333;
    }

    .container {
        background: rgba(255, 255, 255, 0.92); /* sedikit transparan biar kerasa glassy */
        width: 380px;
        padding: 35px 35px 40px;
        border-radius: 18px;
        box-shadow: 0px 8px 25px rgba(0,0,0,0.2);
        text-align: center;
        animation: fadeIn 0.7s ease;
        backdrop-filter: blur(6px);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(25px); }
        to { opacity: 1; transform: translateY(0); }
    }

    h2 {
        margin-top: 0;
        color: #0d47a1;
        font-size: 26px;
        font-weight: 600;
    }

    /* ====== FORM ====== */
    form {
        margin-top: 20px;
        text-align: left;
    }

    label {
        font-size: 14px;
        font-weight: 500;
        color: #0d47a1;
        display: block;
        margin-bottom: 5px;
    }

    input {
        width: 92%;
        padding: 12px;
        border-radius: 10px;
        border: 1px solid #bcd3ff;
        margin-bottom: 18px;
        font-size: 14px;
        transition: 0.3s;
    }

    input:focus {
        border-color: #1976d2;
        outline: none;
        box-shadow: 0px 0px 5px rgba(25,118,210,0.5);
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: #1976d2;
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #0d47a1;
        transform: translateY(-2px);
    }

    /* ===== LINK MAHASISWA ===== */
    .link-mhs {
        margin-top: 25px;
        font-size: 14px;
    }

    .link-mhs a {
        color: #0d47a1;
        font-weight: 600;
        text-decoration: none;
    }

    .link-mhs a:hover {
        text-decoration: underline;
    }

    /* ===== FLASH MESSAGE ===== */
    .msg {
        padding: 10px;
        border-radius: 8px;
        background: #e3f2fd;
        color: #0d47a1;
        margin-bottom: 15px;
        font-size: 14px;
        font-weight: 500;
    }
</style>

</head>
<body>

<div class="container">
    <h2>Login Admin</h2>

    <?php if($msg): ?>
        <div class="msg"><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>

    <form method="post" action="login.php">
        <label>Username</label>
        <input name="username" required>

        <label>Password</label>
        <input name="password" type="password" required>

        <button type="submit">Login</button>
    </form>

    <div class="link-mhs">
        Untuk mahasiswa:<br>
        <a href="mahasiswa/request_ktm.php">Form Pengajuan KTM Universitas Al-Khairiyah</a>
    </div>
</div>

</body>
</html>
