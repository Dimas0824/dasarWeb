<?php
session_start();

// Mengambil data pengguna yang sudah login
$users = include('users.php'); // Ambil data dari file users.php
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;

if (!$username || !isset($users[$username])) {
    // Jika user belum login atau tidak ada di array, redirect ke login
    header('Location: login.php');
    exit();
}

// Mengambil informasi user
$user = $users[$username];

// Tampilkan pesan jika profil berhasil diperbarui
$profile_updated = isset($_SESSION['profile_updated']) ? $_SESSION['profile_updated'] : false;
unset($_SESSION['profile_updated']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/update.css">
</head>

<body>
    <div class="profile-container">
        <div class="profile-box">
            <h2>Informasi Pribadi</h2>
            <form action="profileUpdate.php" method="POST" enctype="multipart/form-data">
                <label for="profile_picture">Profile Picture:</label>
                <input type="file" name="profile_picture" id="profile_picture">

                <label for="name">Nama Lengkap:</label>
                <input type="text" name="name" value="<?php echo isset($user['name']) ? htmlspecialchars($user['name']) : ''; ?>" required>

                <label for="nim">NIM:</label>
                <input type="text" name="nim" value="<?php echo isset($user['nim']) ? htmlspecialchars($user['nim']) : ''; ?>" required>

                <label for="phone">Nomor Telepon:</label>
                <input type="text" name="phone" value="<?php echo isset($user['phone']) ? htmlspecialchars($user['phone']) : ''; ?>">

                <button type="submit">Simpan Perubahan</button>
            </form>
            <a class="back-link" href="index.php">Kembali ke homepage</a>
        </div>
    </div>

    <?php if ($profile_updated): ?>
        <script>
            alert('Profil berhasil diperbarui!');
        </script>
    <?php endif; ?>
</body>

</html>