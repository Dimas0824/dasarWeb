<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari session
$username = $_SESSION['username'];
$user = $_SESSION['users'][$username];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="css/update.css">
</head>

<body>
    <div class="profile-container">
        <div class="profile-box">
            <h2>Informasi Pribadi</h2>
            <form action="profileUpdate.php" method="POST" enctype="multipart/form-data">
                <!-- Menampilkan gambar profil sebelum diupdate -->
                <div class="profile-picture-container">
                    <img src="uploads/<?php echo isset($user['profile_picture']) ? $user['profile_picture'] : 'default.jpg'; ?>" alt="Profile Picture" class="profile-img">
                </div>
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" name="profile_picture" id="profile_picture">

                <label for="name">Nama Lengkap:</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>

                <label for="nim">NIM:</label>
                <input type="text" name="nim" value="<?php echo htmlspecialchars($user['nim']); ?>" required>

                <label for="phone">Nomor Telepon:</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" required>

                <button type="submit">Simpan Perubahan</button>
            </form>
            <a class="back-link" href="index.php">Kembali ke homepage</a>
        </div>
    </div>
</body>

</html>