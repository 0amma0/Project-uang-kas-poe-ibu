<?php
session_start();

// Handle login form submission
$error = '';
if ($_POST) {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    // Hardcoded admin credentials
    $admin_email = 'admin@kaskelas.com';
    $admin_password = 'admin123';
    
    if ($email === $admin_email && $password === $admin_password) {
        $_SESSION['login'] = true;
        $_SESSION['user_name'] = 'Admin';
        header("Location: dashboard.php");
        exit;
    } else {
        $error = 'Email atau password salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KasKelas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="login-body">
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h1>KasKelas</h1>
                <p>Sistem Manajemen Kas Siswa</p>
            </div>
            
            <div class="login-form-container">
                <?php if ($error): ?>
                    <div class="error-message">
                        <span>⚠️</span>
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" class="login-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <span class="input-icon">📧</span>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                placeholder="admin@kaskelas.com"
                                value="admin@kaskelas.com"
                                required
                                autocomplete="email"
                            >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <span class="input-icon">🔒</span>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Masukkan password"
                                required
                                autocomplete="current-password"
                            >
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <label class="checkbox-label">
                            <input type="checkbox" name="remember" id="remember">
                            <span class="checkbox-custom"></span>
                            Ingat saya
                        </label>
                        <a href="#" class="forgot-password">Lupa Password?</a>
                    </div>
                    
                    <button type="submit" class="login-btn">
                        <span class="btn-text">Login</span>
                        <span class="btn-loading">⏳</span>
                    </button>
                </form>
                
                <div class="login-footer">
                    <p>Demo Credentials:</p>
                    <div class="credentials">
                        <strong>Email:</strong> admin@kaskelas.com<br>
                        <strong>Password:</strong> admin123
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
