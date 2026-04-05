<?php
/* ===============================
   SESSION & AUTH
================================*/
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/* ===============================
   DATA SEMENTARA (Mock Data)
   nanti pindah ke database
================================*/

$admin = [
    "name"  => "Administrator Sistem",
    "email" => "admin@kaskelas.com"
];

$app = [
    "name" => "KasKelas",
    "year" => "2025/2026",
    "fee"  => 50000
];

$class = [
    "name"    => "X RPL 1",
    "teacher" => "Budi Santoso, S.Pd"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pengaturan - KasKelas</title>

<link rel="stylesheet" href="../asset/dashboard.css">
<link rel="stylesheet" href="../asset/form.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="dashboard">

<?php include 'navbar.php'; ?>

<main class="content">

<header class="page-header">
<h1>Pengaturan Sistem</h1>
<p>Konfigurasi profil, aplikasi, dan kelas.</p>
</header>


<!-- ================= PROFILE ================= -->
<section class="card">

<h2>Profil Admin</h2>

<form>

<label>Nama Lengkap</label>
<input type="text" value="<?= $admin['name']; ?>">

<label>Email</label>
<input type="email" value="<?= $admin['email']; ?>">

<div class="row">
<input type="password" placeholder="Password Baru">
<input type="password" placeholder="Konfirmasi Password">
</div>

<button class="btn-primary">Simpan</button>

</form>
</section>


<!-- ================= APP ================= -->
<section class="card">

<h2>Pengaturan Aplikasi</h2>

<form>

<label>Nama Aplikasi</label>
<input type="text" value="<?= $app['name']; ?>">

<div class="row">
<input type="text" value="<?= $app['year']; ?>">
<input type="number" value="<?= $app['fee']; ?>">
</div>

<label class="toggle">
<input type="checkbox">
Dark Mode
</label>

<label class="toggle">
<input type="checkbox" checked>
Notifikasi Email
</label>

<button class="btn-primary">Simpan Pengaturan</button>

</form>
</section>


<!-- ================= CLASS ================= -->
<section class="card">

<h2>Pengaturan Kelas</h2>

<form>

<div class="row">
<input type="text" value="<?= $class['name']; ?>">
<input type="text" value="<?= $class['teacher']; ?>">
</div>

<button class="btn-primary">Simpan Data</button>

</form>
</section>


<!-- ================= SECURITY ================= -->
<section class="card">

<h2>Keamanan & Sistem</h2>

<div class="actions">
<button class="btn-logout">Logout</button>
<button class="btn-danger">Hapus Semua Data</button>
</div>

<div class="system-info">
<p>Version : 1.0.0</p>
<p>Developer : KasKelas Team</p>
<p>Tahun : 2026</p>
<p>Status : Aktif</p>
</div>

</section>

</main>
</div>

<?php include 'footer.php'; ?>

</body>
</html>