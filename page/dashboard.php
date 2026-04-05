<?php
/* ======================
   DATA DASHBOARD
   ====================== */

$stats = [
    ["Rp 1.800.000", "Total PoeIbu"],
    ["32", "Siswa"],
    ["25", "Sudah Bayar"]
];

$cashInfo = [
    ["Hari Ini", "Rp 400.000"],
    ["Minggu Ini", "Rp 600.000"],
    ["Bulan Ini", "Rp 800.000"]
];

$features = [
    ["👤", "Login", "Admin & wali kelas"],
    ["💰", "Input Pembayaran", "Tambah data kas siswa"],
    ["✅", "Status", "Lunas / Belum"],
    ["📊", "Laporan", "Mingguan & bulanan"]
];
?>

<link rel="stylesheet" href="/asset/css/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">    
<!-- HERO -->
<section class="hero">
<div class="hero-container">

<div class="hero-content">
<h1>Kelola PoeIbu Siswa dengan Mudah</h1>
<p>Sistem pencatatan PoeIbu real-time, transparan dan efisien</p>

<div class="stats-grid">
<?php foreach ($stats as $item): ?>
<div class="stat-card">
<h3><?= $item[0]; ?></h3>
<p><?= $item[1]; ?></p>
</div>
<?php endforeach; ?>
</div>

<a href="#" class="cta-btn">Input Pembayaran</a>

</div>
</div>
</section>


<!-- CASH INFO -->
<section class="cash-info">
<div class="container">
<h2>Informasi Kas Real-Time</h2>

<div class="cash-grid">
<?php foreach ($cashInfo as $cash): ?>
<div class="cash-card">
<h3><?= $cash[0]; ?></h3>
<div class="amount"><?= $cash[1]; ?></div>
</div>
<?php endforeach; ?>
</div>

</div>
</section>


<!-- FITUR -->
<section class="features">
<div class="container">
<h2>Fitur Utama</h2>

<div class="features-grid">
<?php foreach ($features as $fitur): ?>
<div class="feature-card">
<div class="feature-icon"><?= $fitur[0]; ?></div>
<h3><?= $fitur[1]; ?></h3>
<p><?= $fitur[2]; ?></p>
</div>
<?php endforeach; ?>
</div>

</div>
</section>


<!-- RINGKASAN -->
<section class="summary">
<div class="container">
<div class="summary-card">

<h2>Ringkasan Kas</h2>
<div class="summary-amount">Total Kas: Rp 1.800.000</div>

<div class="progress-container">
<div class="progress-bar">
<div class="progress-fill" style="width:80%"></div>
</div>
<span class="progress-text">80%</span>
</div>

</div>
</div>
</section>