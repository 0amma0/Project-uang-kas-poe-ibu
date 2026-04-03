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
    <title>Siswa - KasKelas</title>
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
                    <h1>Data Siswa</h1>
                    <p>Kelola data siswa dan status pembayaran kas mereka.</p>
                </div>

                <!-- Student Summary Cards -->
                <section class="student-summary">
                    <div class="summary-grid">
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
                            <div class="completion-rate">78%</div>
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

                <!-- Top Actions -->
                <section class="top-actions">
                    <div class="actions-left">
                        <div class="search-container">
                            <span class="search-icon">🔍</span>
                            <input type="text" placeholder="Cari nama siswa..." class="search-input">
                        </div>
                    </div>
                    <div class="actions-right">
                        <button class="btn-primary add-student-btn">+ Tambah Siswa</button>
                    </div>
                </section>

                <!-- Add Student Form -->
                <section class="add-student-section">
                    <div class="form-card">
                        <h2>Tambah Siswa Baru</h2>
                        <form class="add-student-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="student-name">Nama Siswa *</label>
                                    <input type="text" id="student-name" name="student_name" placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="student-class">Kelas *</label>
                                    <select id="student-class" name="student_class" required>
                                        <option value="">Pilih Kelas</option>
                                        <option value="10A">X/10 A</option>
                                        <option value="10B">X/10 B</option>
                                        <option value="11A">XI/11 A</option>
                                        <option value="11B">XI/11 B</option>
                                        <option value="12A">XII/12 A</option>
                                        <option value="12B">XII/12 B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn-secondary">Batal</button>
                                <button type="submit" class="btn-primary">Simpan Siswa</button>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- Student Table -->
                <section class="student-table-section">
                    <div class="table-header">
                        <h2>Daftar Siswa</h2>
                        <div class="table-actions">
                            <span class="table-info">Menampilkan 1-10 dari 32 siswa</span>
                            <div class="pagination">
                                <button class="pagination-btn">‹</button>
                                <span class="pagination-current">1</span>
                                <span class="pagination-total">/ 4</span>
                                <button class="pagination-btn">›</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-container">
                        <table class="students-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Status Pembayaran</th>
                                    <th>Total Bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad Rizky</td>
                                    <td>X/10 A</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siti Nurhaliza</td>
                                    <td>X/10 B</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Budi Santoso</td>
                                    <td>XI/11 A</td>
                                    <td><span class="status-badge belum">Belum</span></td>
                                    <td>Rp 125.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Indah Permata</td>
                                    <td>XI/11 B</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rizwan Kurnia</td>
                                    <td>XII/12 A</td>
                                    <td><span class="status-badge belum">Belum</span></td>
                                    <td>Rp 150.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Fatimah Azzahra</td>
                                    <td>X/10 A</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Hendra Wijaya</td>
                                    <td>XII/12 B</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Nadia Putri</td>
                                    <td>XI/11 A</td>
                                    <td><span class="status-badge belum">Belum</span></td>
                                    <td>Rp 100.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Bayu Pratama</td>
                                    <td>X/10 B</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sarah Melinda</td>
                                    <td>XII/12 A</td>
                                    <td><span class="status-badge lunas">Lunas</span></td>
                                    <td>Rp 250.000</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-edit">Edit</button>
                                            <button class="btn-delete">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
