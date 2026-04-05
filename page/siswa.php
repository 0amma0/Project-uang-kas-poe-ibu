<?php
/* =========================
   AUTH SYSTEM
=========================*/
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/* =========================
   DATA SEMENTARA
   (nanti dari database)
=========================*/

$students = [
    ["Ahmad Rizky","X/10 A","lunas",250000],
    ["Siti Nurhaliza","X/10 B","lunas",250000],
    ["Budi Santoso","XI/11 A","belum",125000],
    ["Indah Permata","XI/11 B","lunas",250000],
    ["Rizwan Kurnia","XII/12 A","belum",150000],
];

$totalStudent = count($students);
$paid = count(array_filter($students, fn($s)=>$s[2]=="lunas"));
$unpaid = $totalStudent - $paid;
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>Data Siswa - KasKelas</title>

<link rel="stylesheet" href="assets/css/dashboard.css">
<link rel="stylesheet" href="assets/css/siswa.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>

<div class="dashboard">

<?php include 'navbar.php'; ?>

<main class="content">

<header class="page-header">
<h1>Data Siswa</h1>
<p>Kelola data siswa dan pembayaran kas.</p>
</header>


<!-- SUMMARY -->
<section class="summary">

<div class="card">
<h3>Total Siswa</h3>
<span><?= $totalStudent ?></span>
</div>

<div class="card">
<h3>Sudah Bayar</h3>
<span class="green"><?= $paid ?></span>
</div>

<div class="card">
<h3>Belum Bayar</h3>
<span class="red"><?= $unpaid ?></span>
</div>

</section>


<!-- ACTION -->
<section class="top-action">

<input type="text" placeholder="Cari siswa...">

<button class="btn-primary">+ Tambah Siswa</button>

</section>


<!-- FORM TAMBAH -->
<section class="card">

<h2>Tambah Siswa</h2>

<form>

<div class="row">
<input type="text" placeholder="Nama Siswa" required>

<select required>
<option>Pilih Kelas</option>
<option>X/10 A</option>
<option>X/10 B</option>
<option>XI/11 A</option>
<option>XI/11 B</option>
<option>XII/12 A</option>
</select>
</div>

<button class="btn-primary">Simpan</button>

</form>

</section>


<!-- TABLE -->
<section class="card">

<h2>Daftar Siswa</h2>

<table>

<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Kelas</th>
<th>Status</th>
<th>Total</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php foreach($students as $i=>$s): ?>
<tr>

<td><?= $i+1 ?></td>
<td><?= $s[0] ?></td>
<td><?= $s[1] ?></td>

<td>
<span class="badge <?= $s[2] ?>">
<?= ucfirst($s[2]) ?>
</span>
</td>

<td>Rp <?= number_format($s[3],0,',','.') ?></td>

<td>
<button class="btn-edit">Edit</button>
<button class="btn-delete">Hapus</button>
</td>

</tr>
<?php endforeach; ?>

</tbody>
</table>

</section>

</main>

</div>

<?php include 'footer.php'; ?>

</body>
</html>