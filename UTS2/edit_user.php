<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

// Cek apakah username telah diberikan dan pengguna tersebut ada di dalam session
if (!isset($_GET['username']) || !isset($_SESSION['users'][$_GET['username']])) {
    header("Location: index.php");
    exit();
}

$username = $_GET['username'];
$user = $_SESSION['users'][$username];

// Proses update status pengguna
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Update status pengguna
    $_SESSION['users'][$username]['status'] = $_POST['status'];

    // Redirect ke halaman utama setelah update
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Status Pengguna</title>
    <link rel="stylesheet" href="css/edit.css">
</head>

<body>
    <div class="profile-container">
        <div class="profile-box">
            <h2>Edit Status Pengguna</h2>
            <form action="" method="POST">
                <img src="uploads/<?php echo isset($user['profile_picture']) ? $user['profile_picture'] : 'default.jpg'; ?>"
                    alt="Profile Picture" class="profile-img">

                <label for="name">Nama Lengkap:</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" disabled>

                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" disabled>

                <label for="phone">Nomor Telepon:</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" disabled>

                <div class="status">
                    <label for="status">Status Pengguna:</label>
                    <select name="status" id="status" class="status" required>
                        <option value="aktif" <?php echo ($user['status'] === 'aktif') ? 'selected' : ''; ?>>Aktif</option>
                        <option value="nonaktif" <?php echo ($user['status'] === 'inactive') ? 'selected' : ''; ?>>Nonaktif</option>
                        <option value="suspended" <?php echo ($user['status'] === 'suspended') ? 'selected' : ''; ?>>suspended</option>
                        <option value="pending" <?php echo ($user['status'] === 'pending') ? 'selected' : ''; ?>>pending</option>
                    </select>
                </div>

                <button type="submit">Simpan Perubahan</button>
            </form>
            <a class="back-link" href="index.php">Kembali ke homepage</a>
        </div>
    </div>
</body>

</html>