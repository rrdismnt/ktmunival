<?php
// login.php
require_once 'functions.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $u = trim($_POST['username'] ?? '');
    $p = $_POST['password'] ?? '';
    if(login_admin($u,$p)){
        header('Location: admin/dashboard.php');
        exit;
    } else {
        flash('msg','Login gagal: cek username/password');
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
