<?php
// logout.php
require_once 'functions.php';
logout_admin();
logout_mahasiswa();
header('Location: index.php');
exit;
