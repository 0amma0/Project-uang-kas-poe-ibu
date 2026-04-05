<?php
session_start();

/* ===============================
   AUTH CHECK
================================*/
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/* ===============================
   DATA SEMENTARA (NANTI DATABASE)
================================*/
$reports = [
    ["Ahmad Rizky","15 Jan 2026","Rp 50.000","lunas"],
    ["Siti Nurhaliza","14 Jan 2026","Rp 50.000","lunas"],
    ["Budi Santoso","13 Jan 2026","Rp 25.000","belum"],
    ["Indah Permata","12 Jan 2026","Rp 50.000","lunas"],
    ["Rizwan Kurnia","11 Jan 2026","Rp 50.000","belum"],
];

$monthlyRecap = [
    ["Januari 2026","Rp 4.500.000",90],
    ["Desember 2025","Rp 4.200.000",84],
    ["November 2025","Rp 4.100.000",82],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>Laporan Kas</title>

<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/dashboard.css">
<link rel="stylesheet" href="assets/css/report.css">
</head>

<body class="dashboard-body">

<?php include 'includes/header.php'; ?>

<main class="dashboard-main">

<div class="page-header">
<h1>Laporan Kas Siswa</h1>
<p>Detail pembayaran kas siswa.</p>
</div>

<!-- FILTER -->
<section class="filter-section">
<div class="filter-container">

<select>
<option>Semua Bulan</option>
<option>Januari</option>
<option>Februari</option>
</select>

<select>
<option>2026</option>
<option>2025</option>
</select>

<button class="btn-primary">Tampilkan</button>
<button class="btn-secondary">Download PDF</button>

</div>
</section>

<!-- SUMMARY -->
<section class="summary-grid">

<div class="summary-card">
<h3>Total Pemasukan</h3>
<p class="number">Rp 5.000.000</p>
</div>

<div class="summary-card">
<h3>Total Siswa</h3>
<p class="number">32</p>
</div>

<div class="summary-card">
<h3>Sudah Bayar</h3>
<p class="number success">25</p>
</div>

</section>

<div class="report-grid">

<!-- TABLE LAPORAN -->
<section class="card">
<h2>Detail Laporan</h2>

<table class="table">
<thead>
<tr>
<th>Nama</th>
<th>Tanggal</th>
<th>Jumlah</th>
<th>Status</th>
</tr>
</thead>

<tbody>

<?php foreach($reports as $row): ?>
<tr>
<td><?= $row[0] ?></td>
<td><?= $row[1] ?></td>
<td><?= $row[2] ?></td>
<td>
<span class="badge <?= $row[3] ?>">
<?= ucfirst($row[3]) ?>
</span>
</td>
</tr>
<?php endforeach; ?>

</tbody>
</table>

</section>


<!-- REKAP -->
<section class="card">
<h2>Rekap Bulanan</h2>

<table class="table">

<thead>
<tr>
<th>Bulan</th>
<th>Total</th>
<th>Progress</th>
</tr>
</thead>

<tbody>

<?php foreach($monthlyRecap as $recap): ?>
<tr>
<td><?= $recap[0] ?></td>
<td><?= $recap[1] ?></td>
<td>
<div class="progress">
<div style="width:<?= $recap[2] ?>%"></div>
</div>
<?= $recap[2] ?>%
</td>
</tr>
<?php endforeach; ?>

</tbody>

</table>

</section>

</div>

</main>

<?php include 'includes/footer.php'; ?>

</body>
</html>