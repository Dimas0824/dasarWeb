<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Daftar</h2>
            <form action="proses_register.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username Anda" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" placeholder="Masukkan NIM Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" name="phone" placeholder="Masukkan nomor telepon Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" placeholder="Masukkan kata sandi Anda" required>
                </div>
                <div class="form-group" style="flex: 1 1 100%;">
                    <label for="profile_picture">Foto Profil</label>
                    <input type="file" name="profile_picture">
                </div>
                <button type="submit">Daftar</button>
            </form>
            <p class="register-link">Sudah punya akun? <a href="login.php">Login Disini</a></p>
        </div>
    </div>
</body>

</html>