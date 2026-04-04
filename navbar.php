<!-- Top Navbar Dashboard -->
<header class="top-navbar">
    <div class="nav-container">
        <div class="nav-left">
            <h2>KasKelas</h2>
        </div>
        <div class="nav-right">
            <div class="user-info">
                <span class="user-name">Admin</span>
                <div class="user-avatar">A</div>
            </div>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</header>

<div class="main-content">
    <!-- Sidebar -->
    <aside class="sidebar">
        <nav class="sidebar-nav">
            <a href="dashboard.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">
                <span class="nav-icon">📊</span>
                <span class="nav-text">Dashboard</span>
            </a>
            <a href="pembayaran.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'pembayaran.php' ? 'active' : ''; ?>">
                <span class="nav-icon">💰</span>
                <span class="nav-text">Pembayaran</span>
            </a>
            <a href="siswa.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'siswa.php' ? 'active' : ''; ?>">
                <span class="nav-icon">👥</span>
                <span class="nav-text">Siswa</span>
            </a>
            <a href="laporan.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'laporan.php' ? 'active' : ''; ?>">
                <span class="nav-icon">📈</span>
                <span class="nav-text">Laporan</span>
            </a>
            <a href="settings.php" class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?>">
                <span class="nav-icon">⚙️</span>
                <span class="nav-text">Settings</span>
            </a>
        </nav>
    </aside>