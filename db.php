<?php
// db.php (perbaikan) — taruh di C:\xampp\htdocs\unival_ktm\db.php
require_once __DIR__ . '/config.php';

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );

    // pastikan $pdo tersedia secara global
    $GLOBALS['pdo'] = $pdo;

} catch (PDOException $e) {
    // tampilkan pesan jelas saat development
    die("DB Connection failed: " . $e->getMessage());
}
