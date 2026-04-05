<?php
session_start();

/* ======================
   AUTH CHECK
====================== */
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/* ======================
   DATA SEMENTARA
   (nanti diganti database)
====================== */

$students = [
    "Ahmad Rizky",
    "Siti Nurhaliza",
    "Budi Santoso",
    "Indah Permata",
    "Rizwan Kurnia",
    "Fatimah Azzahra"
];

$payments = [
    ["Ahmad Rizky","15 Jan 2026","Rp 50.000","lunas","Sudah lunas bulan Januari"],
    ["Siti Nurhaliza","14 Jan 2026","Rp 50.000","lunas","-"],
    ["Budi Santoso","13 Jan 2026","Rp 25.000","belum","DP bulan ini"],
    ["Indah Permata","12 Jan 2026","Rp 50.000","lunas","-"],
    ["Rizwan Kurnia","11 Jan 2026","Rp 50.000","belum","Menunggu konfirmasi"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pembayaran - KasKelas</title>

<link rel="stylesheet" href="asset/component.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body class="dashboard-body">

<div class="dashboard-wrapper">

<?php include 'header.php'; ?>

<main class="dashboard-main">

<!-- HEADER -->
<div class="page-header">
<h1>Input Pembayaran Kas</h1>
<p>Tambahkan data pembayaran kas siswa dengan mudah dan akurat.</p>
</div>

<div class="payment-layout">

<!-- ================= FORM ================= -->
<section class="payment-form-section">

<div class="form-card">
<h2>Tambah Pembayaran Baru</h2>

<form class="payment-form" method="POST">

<label>Nama Siswa *</label>
<select name="student_name" required>
<option value="">Pilih Siswa</option>

<?php foreach($students as $student): ?>
<option value="<?= $student ?>">
<?= $student ?>
</option>
<?php endforeach; ?>

</select>

<div class="form-row">

<div class="form-group">
<label>Tanggal *</label>
<input type="date" name="payment_date" required>
</div>

<div class="form-group">
<label>Jumlah *</label>
<div class="input-group">
<span>Rp</span>
<input type="number" name="amount" min="0" step="1000" required>
</div>
</div>

</div>

<label>Status *</label>
<div class="radio-group">
<label><input type="radio" name="status" value="lunas" checked> Lunas</label>
<label><input type="radio" name="status" value="belum"> Belum</label>
</div>

<label>Keterangan</label>
<textarea name="notes"></textarea>

<div class="form-actions">
<button type="reset" class="btn-secondary">Batal</button>
<button type="submit" class="btn-primary">Simpan Pembayaran</button>
</div>

</form>
</div>
</section>


<!-- ================= SUMMARY ================= -->
<section class="summary-cards-section">

<h3>Ringkasan Hari Ini</h3>

<div class="summary-grid-small">

<div class="summary-card-small">
<h4>Total Kas</h4>
<div>Rp 200.000</div>
</div>

<div class="summary-card-small">
<h4>Bulan Ini</h4>
<div>Rp 4.000.000</div>
</div>

<div class="summary-card-small">
<h4>Transaksi</h4>
<div>12</div>
</div>

</div>
</section>

</div>


<!-- ================= TABLE ================= -->
<section class="recent-payments-section">

<h2>Riwayat Pembayaran</h2>

<table class="payments-table">

<thead>
<tr>
<th>Nama Siswa</th>
<th>Tanggal</th>
<th>Jumlah</th>
<th>Status</th>
<th>Keterangan</th>
</tr>
</thead>

<tbody>

<?php foreach($payments as $p): ?>
<tr>

<td><?= $p[0] ?></td>
<td><?= $p[1] ?></td>
<td><?= $p[2] ?></td>

<td>
<span class="status-badge <?= $p[3] ?>">
<?= ucfirst($p[3]) ?>
</span>
</td>

<td><?= $p[4] ?></td>

</tr>
<?php endforeach; ?>

</tbody>
</table>

</section>

</main>
</div>
</body>
</html>