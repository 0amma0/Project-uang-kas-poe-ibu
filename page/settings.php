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
    <title>Pengaturan - KasKelas</title>
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
                    <h1>Pengaturan Sistem</h1>
                    <p>Atur profil, aplikasi, dan konfigurasi sistem KasKelas.</p>
                </div>

                <div class="settings-grid">
                    <!-- Profile Settings -->
                    <section class="settings-card">
                        <div class="settings-header">
                            <h2>👤 Profil Admin</h2>
                            <p>Ubah informasi profil akun administrator.</p>
                        </div>
                        <form class="settings-form">
                            <div class="form-group">
                                <label for="full-name">Nama Lengkap</label>
                                <input type="text" id="full-name" name="full_name" value="Administrator Sistem" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="admin@kaskelas.com" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="new-password">Password Baru</label>
                                    <input type="password" id="new-password" name="new_password" placeholder="Kosongkan jika tidak diubah">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Konfirmasi Password</label>
                                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Konfirmasi password baru">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn-secondary">Batal</button>
                                <button type="submit" class="btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </section>

                    <!-- Application Settings -->
                    <section class="settings-card">
                        <div class="settings-header">
                            <h2>⚙️ Pengaturan Aplikasi</h2>
                            <p>Konfigurasi umum aplikasi KasKelas.</p>
                        </div>
                        <form class="settings-form">
                            <div class="form-group">
                                <label for="app-name">Nama Aplikasi</label>
                                <input type="text" id="app-name" name="app_name" value="KasKelas" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="school-year">Tahun Ajaran</label>
                                    <input type="text" id="school-year" name="school_year" value="2025/2026" required>
                                </div>
                                <div class="form-group">
                                    <label for="monthly-fee">Nominal Kas per Siswa</label>
                                    <div class="input-group">
                                        <span class="input-prefix">Rp</span>
                                        <input type="number" id="monthly-fee" name="monthly_fee" value="50000" min="0" step="1000">
                                    </div>
                                </div>
                            </div>
                            <div class="toggle-group">
                                <label class="toggle-label">
                                    <span class="toggle-text">Dark Mode</span>
                                    <div class="toggle-switch">
                                        <input type="checkbox" id="dark-mode" class="toggle-input">
                                        <span class="toggle-slider"></span>
                                    </div>
                                </label>
                                <label class="toggle-label">
                                    <span class="toggle-text">Notifikasi Email</span>
                                    <div class="toggle-switch">
                                        <input type="checkbox" id="email-notif" class="toggle-input" checked>
                                        <span class="toggle-slider"></span>
                                    </div>
                                </label>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Simpan Pengaturan</button>
                            </div>
                        </form>
                    </section>
                </div>

                <div class="settings-grid">
                    <!-- Class Settings -->
                    <section class="settings-card">
                        <div class="settings-header">
                            <h2>🏫 Pengaturan Kelas</h2>
                            <p>Kelola data kelas dan wali kelas.</p>
                        </div>
                        <form class="settings-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="class-name">Nama Kelas</label>
                                    <input type="text" id="class-name" name="class_name" value="X RPL 1" required>
                                </div>
                                <div class="form-group">
                                    <label for="class-teacher">Wali Kelas</label>
                                    <input type="text" id="class-teacher" name="class_teacher" value="Budi Santoso, S.Pd" required>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </section>

                    <!-- Security & System Info -->
                    <section class="settings-card security-card">
                        <div class="settings-header">
                            <h2>🔒 Keamanan & Info Sistem</h2>
                            <p>Pengaturan keamanan dan informasi sistem.</p>
                        </div>
                        <div class="security-actions">
                            <button class="btn-logout">Logout</button>
                            <button class="btn-danger">Hapus Semua Data</button>
                        </div>
                        <div class="system-info">
                            <div class="info-item">
                                <span class="info-label">Version</span>
                                <span class="info-value">1.0.0</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Developer</span>
                                <span class="info-value">KasKelas Team</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Tahun</span>
                                <span class="info-value">2026</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Status</span>
                                <span class="info-value success">Aktif</span>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
