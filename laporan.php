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
    <title>Laporan - KasKelas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="dashboard-body">
    <div class="dashboard-wrapper">
         <?php include 'navbar.php'; ?>
            <!-- Main Content -->
            <main class="dashboard-main">
                <!-- Page Title -->
                <div class="page-header">
                    <h1>Laporan Kas Siswa</h1>
                    <p>Lihat detail lengkap pembayaran kas siswa per bulan dan tahun.</p>
                </div>

                <!-- Filter Section -->
                <section class="filter-section">
                    <div class="filter-container">
                        <div class="filter-group">
                            <label for="month-filter">Pilih Bulan</label>
                            <select id="month-filter">
                                <option value="">Semua Bulan</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="year-filter">Pilih Tahun</label>
                            <select id="year-filter">
                                <option value="">Semua Tahun</option>
                                <option value="2024">2024</option>
                                <option value="2025" selected>2025</option>
                                <option value="2026">2026</option>
                            </select>
                        </div>
                        <button class="filter-btn primary">Tampilkan</button>
                        <button class="filter-btn secondary">Download PDF</button>
                    </div>
                </section>

                <!-- Summary Section -->
                <section class="summary-section">
                    <div class="summary-grid">
                        <div class="summary-card">
                            <div class="card-header">
                                <h3>Total Pemasukan</h3>
                                <span class="card-icon">💰</span>
                            </div>
                            <div class="card-number">Rp 5.000.000</div>
                            <div class="progress-container">
                                <div class="progress-bar-small">
                                    <div class="progress-fill" style="width: 78%"></div>
                                </div>
                                <span class="progress-text-small">78%</span>
                            </div>
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
                            <div class="completion-rate">78% lengkap</div>
                        </div>
                    </div>
                </section>

                <div class="report-grid">
                    <!-- Report Table -->
                    <section class="report-table-section">
                        <h2>Detail Laporan</h2>
                        <div class="table-container">
                            <table class="report-table">
                                <thead>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Jumlah Bayar</th>
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
                                        <td>Rp 25.000</td>
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
                                    <tr>
                                        <td>Fatimah Azzahra</td>
                                        <td>10 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Hendra Wijaya</td>
                                        <td>09 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nadia Putri</td>
                                        <td>08 Jan 2026</td>
                                        <td>Rp 30.000</td>
                                        <td><span class="status-badge belum">Belum</span></td>
                                    </tr>
                                    <tr>
                                        <td>Bayu Pratama</td>
                                        <td>07 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sarah Melinda</td>
                                        <td>06 Jan 2026</td>
                                        <td>Rp 50.000</td>
                                        <td><span class="status-badge lunas">Lunas</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <!-- Monthly Recap -->
                    <section class="monthly-recap-section">
                        <h2>Rekap Bulanan</h2>
                        <div class="table-container">
                            <table class="recap-table">
                                <thead>
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Total Pemasukan</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Januari 2026</td>
                                        <td>Rp 4.500.000</td>
                                        <td>
                                            <div class="progress-inline">
                                                <div class="progress-fill-inline" style="width: 90%"></div>
                                            </div>
                                            <span>90%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Desember 2025</td>
                                        <td>Rp 4.200.000</td>
                                        <td>
                                            <div class="progress-inline">
                                                <div class="progress-fill-inline" style="width: 84%"></div>
                                            </div>
                                            <span>84%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>November 2025</td>
                                        <td>Rp 4.100.000</td>
                                        <td>
                                            <div class="progress-inline">
                                                <div class="progress-fill-inline" style="width: 82%"></div>
                                            </div>
                                            <span>82%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oktober 2025</td>
                                        <td>Rp 3.900.000</td>
                                        <td>
                                            <div class="progress-inline">
                                                <div class="progress-fill-inline" style="width: 78%"></div>
                                            </div>
                                            <span>78%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
