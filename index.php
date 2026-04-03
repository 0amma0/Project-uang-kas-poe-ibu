<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUIBU - Kelola PoeIbu Siswa dengan Mudah</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Kelola PoeIbu Siswa dengan Mudah</h1>
                <p>Sistem pencatatan PoeIbu real-time, transparan dan efisien</p>
                
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3>Rp 1.800.000</h3>
                        <p>Total PoeIbu</p>
                    </div>
                    <div class="stat-card">
                        <h3>32</h3>
                        <p>Siswa</p>
                    </div>
                    <div class="stat-card">
                        <h3>25</h3>
                        <p>Sudah Bayar</p>
                    </div>
                </div>
                
                <a href="#input" class="cta-btn">Input Pembayaran</a>
            </div>
            <div class="hero-image">
                <div class="placeholder-image">
                    <div class="image-content">
                        <div class="circle"></div>
                        <div class="circle small"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Real-Time Cash Information -->
    <section class="cash-info">
        <div class="container">
            <h2>Informasi Kas Real-Time</h2>
            <div class="cash-grid">
                <div class="cash-card">
                    <h3>Hari Ini</h3>
                    <div class="amount">Rp 400.000</div>
                </div>
                <div class="cash-card">
                    <h3>Minggu Ini</h3>
                    <div class="amount">Rp 600.000</div>
                </div>
                <div class="cash-card">
                    <h3>Bulan Ini</h3>
                    <div class="amount">Rp 800.000</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Features -->
    <section class="features">
        <div class="container">
            <h2>Fitur Utama</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">👤</div>
                    <h3>Login</h3>
                    <p>Admin & wali kelas</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Input Pembayaran</h3>
                    <p>Tambah data kas siswa</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>Status</h3>
                    <p>Lunas / Belum</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Laporan</h3>
                    <p>Mingguan & bulanan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cash Summary -->
    <section class="summary">
        <div class="container">
            <div class="summary-card">
                <h2>Ringkasan Kas</h2>
                <div class="summary-amount">Total Kas: Rp 5.000.000</div>
                <div class="progress-container">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 80%"></div>
                    </div>
                    <span class="progress-text">80%</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Report Access -->
    <section class="report">
        <div class="container">
            <h2>Akses Laporan Wali Kelas</h2>
            <div class="report-form">
                <input type="email" placeholder="Masukkan email wali kelas">
                <button class="report-btn">Lihat Laporan</button>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
