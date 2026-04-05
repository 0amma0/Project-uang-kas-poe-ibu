<?php

$page = $_GET['page'] ?? 'dashboard';

$allowed_pages = [
    'dashboard',
    'siswa',
    'pembayaran',
    'laporan',
    'settings',
    'login'
];

if (!in_array($page, $allowed_pages)) {
    $page = 'dashboard';
}

include 'component/header.php';
include 'component/navbar.php';
include "page/$page.php";
include 'component/footer.php';
?>