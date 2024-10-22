<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="proses_login.php" method="POST">
                <label for="email">Alamat email</label></label>
                <input type="email" name="email" placeholder="Masukkan email" required>

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>

                <button type="submit">Masuk</button>
            </form>
            <p class="register-link">Tidak punya akun? <a href="register.php">Daftar disini</a></p>
        </div>
    </div>
</body>

</html>