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
    <title>Pembayaran - KasKelas</title>
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
                    <h1>Input Pembayaran Kas</h1>
                    <p>Tambahkan data pembayaran kas siswa dengan mudah dan akurat.</p>
                </div>

                <div class="payment-layout">
                    <!-- Payment Form -->
                    <section class="payment-form-section">
                        <div class="form-card">
                            <h2>Tambah Pembayaran Baru</h2>
                            <form class="payment-form">
                                <div class="form-group">
                                    <label for="student-name">Nama Siswa *</label>
                                    <select id="student-name" name="student_name" required>
                                        <option value="">Pilih Siswa</option>
                                        <option value="ahmad-rizky">Ahmad Rizky</option>
                                        <option value="siti-nurhaliza">Siti Nurhaliza</option>
                                        <option value="budi-santoso">Budi Santoso</option>
                                        <option value="indah-permata">Indah Permata</option>
                                        <option value="rizwan-kurnia">Rizwan Kurnia</option>
                                        <option value="fatimah-azzahra">Fatimah Azzahra</option>
                                    </select>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="payment-date">Tanggal Pembayaran *</label>
                                        <input type="date" id="payment-date" name="payment_date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Jumlah Bayar *</label>
                                        <div class="input-group">
                                            <span class="input-prefix">Rp</span>
                                            <input type="number" id="amount" name="amount" min="0" step="1000" placeholder="0" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Status Pembayaran *</label>
                                    <div class="radio-group">
                                        <label class="radio-label">
                                            <input type="radio" name="status" value="lunas" checked>
                                            <span class="radio-custom"></span>
                                            Lunas
                                        </label>
                                        <label class="radio-label">
                                            <input type="radio" name="status" value="belum">
                                            <span class="radio-custom"></span>
                                            Belum
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="notes">Keterangan</label>
                                    <textarea id="notes" name="notes" rows="4" placeholder="Catatan tambahan (opsional)..."></textarea>
                                </div>

                                <div class="form-actions">
                                    <button type="button" class="btn-secondary">Batal</button>
                                    <button type="submit" class="btn-primary">Simpan Pembayaran</button>
                                </div>
                            </form>
                        </div>
                    </section>

                    <!-- Payment Summary Cards -->
                    <section class="summary-cards-section">
                        <h3>Ringkasan Hari Ini</h3>
                        <div class="summary-grid-small">
                            <div class="summary-card-small">
                                <div class="card-header-small">
                                    <h4>Total Kas</h4>
                                    <span class="card-icon-small">💰</span>
                                </div>
                                <div class="card-number-small">Rp 200.000</div>
                            </div>
                            <div class="summary-card-small">
                                <div class="card-header-small">
                                    <h4>Bulan Ini</h4>
                                    <span class="card-icon-small">📅</span>
                                </div>
                                <div class="card-number-small">Rp 4.000.000</div>
                            </div>
                            <div class="summary-card-small">
                                <div class="card-header-small">
                                    <h4>Transaksi</h4>
                                    <span class="card-icon-small">📊</span>
                                </div>
                                <div class="card-number-small">12</div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Recent Payments Table -->
                <section class="recent-payments-section">
                    <h2>Riwayat Pembayaran</h2>
                    <div class="table-container">
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
                                <tr>
                                    <td>Ahmad Rizky</td>
                                    <td>15 Jan 2026</td>
                                    <td>Rp 50.000</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Sudah lunas bulan Januari</td>
                                </tr>
                                <tr>
                                    <td>Siti Nurhaliza</td>
                                    <td>14 Jan 2026</td>
                                    <td>Rp 50.000</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Budi Santoso</td>
                                    <td>13 Jan 2026</td>
                                    <td>Rp 25.000</td>
                                    <td><span class="status-badge belum">Belum</span></td>
                                    <td>DP bulan ini</td>
                                </tr>
                                <tr>
                                    <td>Indah Permata</td>
                                    <td>12 Jan 2026</td>
                                    <td>Rp 50.000</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Rizwan Kurnia</td>
                                    <td>11 Jan 2026</td>
                                    <td>Rp 50.000</td>
                                    <td><span class="status-badge belum">Belum</span></td>
                                    <td>Menunggu konfirmasi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
