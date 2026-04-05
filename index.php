<?php
session_start();

/* =====================
   ROUTING PAGE
===================== */

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

/* =====================
   LOAD PAGE
===================== */

include __DIR__ . '/component/header.php';
include __DIR__ . "/page/$page.php";
include __DIR__ . '/component/footer.php';