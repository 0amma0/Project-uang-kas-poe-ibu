<?php
session_start();

/*
|--------------------------------------------------------------------------
| CONFIG LOGIN (sementara hardcoded)
|--------------------------------------------------------------------------
| Nanti bisa dipindah ke database
*/
$ADMIN = [
    'email' => 'admin@kaskelas.com',
    'password' => 'admin123',
    'name' => 'Admin'
];

$errorMessage = '';

/*
|--------------------------------------------------------------------------
| HANDLE FORM SUBMIT
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (loginUser($email, $password, $ADMIN)) {
        header("Location: dashboard.php");
        exit;
    }

    $errorMessage = 'Email atau password salah!';
}


/*
|--------------------------------------------------------------------------
| FUNCTION LOGIN
|--------------------------------------------------------------------------
*/
function loginUser($email, $password, $admin)
{
    if ($email === $admin['email'] && $password === $admin['password']) {

        $_SESSION['login'] = true;
        $_SESSION['user_name'] = $admin['name'];

        return true;
    }

    return false;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - KasKelas</title>

    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="login-body">

<div class="login-container">

    <div class="login-card">

        <div class="login-header">
            <h1>KasKelas</h1>
            <p>Sistem Manajemen Kas Siswa</p>
        </div>

        <?php if ($errorMessage): ?>
            <div class="error-message">
                ⚠️ <?= htmlspecialchars($errorMessage); ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="login-form">

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="admin@kaskelas.com"
                    required
                >
            </div>

            <div class="form-group">
                <label>Password</label>
                <input
                    type="password"
                    name="password"
                    required
                >
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>

        </form>

        <div class="login-footer">
            <p>Demo Login:</p>
            <small>
                admin@kaskelas.com <br>
                admin123
            </small>
        </div>

    </div>

</div>

</body>
</html>