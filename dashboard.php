<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - KasKelas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    <div class="dashboard-wrapper">
       <?php include 'navbar.php'; ?>
            <!-- Dashboard Content -->
            <main class="dashboard-main">
                <!-- Page Title -->
                <div class="page-header">
                    <h1>Dashboard KasKelas</h1>
                    <p>Selamat datang, Admin. Berikut ringkasan kas siswa terkini.</p>
                </div>

                <!-- Summary Cards -->
                <section class="summary-section">
                    <div class="summary-grid">
                        <div class="summary-card large">
                            <div class="card-header">
                                <h3>Total Kas</h3>
                                <span class="card-icon">💰</span>
                            </div>
                            <div class="card-number">Rp 5.000.000</div>
                        </div>
                        <div class="summary-card">
                            <div class="card-header">
                                <h3>Total Siswa</h3>
                                <span class="card-icon">👥</span>
                            </div>
                            <div class="card-number">32</div>
                        </div>
                        <div class="summary-card">
                            <div class="card-header">
                                <h3>Sudah Bayar</h3>
                                <span class="card-icon">✅</span>
                            </div>
                            <div class="card-number green">25</div>
                        </div>
                        <div class="summary-card">
                            <div class="card-header">
                                <h3>Belum Bayar</h3>
                                <span class="card-icon">⏳</span>
                            </div>
                            <div class="card-number red">7</div>
                        </div>
                    </div>
                </section>

                <div class="dashboard-grid">
                    <!-- Cash Statistics -->
                    <section class="stats-section">
                        <h2>Statistik Kas</h2>
                        <div class="stats-grid">
                            <div class="stat-card">
                                <h3>Hari Ini</h3>
                                <div class="stat-amount">Rp 200.000</div>
                            </div>
                            <div class="stat-card">
                                <h3>Minggu Ini</h3>
                                <div class="stat-amount">Rp 1.200.000</div>
                            </div>
                            <div class="stat-card">
                                <h3>Bulan Ini</h3>
                                <div class="stat-amount">Rp 4.000.000</div>
                            </div>
                        </div>
                    </section>

                    <!-- Recent Transactions -->
                    <section class="transactions-section">
                        <h2>Transaksi Terbaru</h2>
                        <div class="table-container">
                            <table class="transactions-table">
                                <thead>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ahmad Rizky</td>
                                        <td>15 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Siti Nurhaliza</td>
                                        <td>14 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Budi Santoso</td>
                                        <td>13 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge belum">Belum</span></td>
                                    </tr>
                                    <tr>
                                        <td>Indah Permata</td>
                                        <td>12 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Rizwan Kurnia</td>
                                        <td>11 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge belum">Belum</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>

                <!-- Payment Status -->
                <section class="payment-status-section">
                    <h2>Status Pembayaran</h2>
                    <div class="status-grid">
                        <div class="status-item lunas">
                            <div class="status-count">25</div>
                            <div class="status-label">Lunas</div>
                        </div>
                        <div class="status-item belum">
                            <div class="status-count">7</div>
                            <div class="status-label">Belum Bayar</div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
