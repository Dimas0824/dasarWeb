<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

include('users.php'); // masukkan data user
$username = $_SESSION['username'];
$user = $_SESSION['users'][$username];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar">
        <a class="home" href="index.php">Home</a>
        <div class="navbar-right">
            <img src="uploads/<?php echo isset($user['profile_picture']) ? $user['profile_picture'] : 'default.jpg'; ?>" alt="Profile Picture" class="profile-img">
            <span class="username"><?php echo isset($user['name']) ? $user['name'] : ''; ?></span>
            <a href="profile.php">Edit Profil</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div>
        <h2 class="welcome">Selamat Datang, <?php echo isset($user['name']) ? $user['name'] : ''; ?></h2>
    </div>

    <div class="container">

        <h3>Statistik Pengguna</h3>
        <ul>
            <li>Total Pengguna: <?php echo count($_SESSION['users']); ?></li>
        </ul>

        <h3>Daftar Pengguna</h3>
        <table>
            <thead>
                <tr>
                    <th class="name">Nama</th>
                    <th class="email">Email</th>
                    <th class="phone">Nomor Telepon</th>
                    <th class="status">Status</th>
                    <th class="action">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['users'] as $username => $user): ?>
                    <?php
                    // Cek apakah user yang sedang login, jika iya lewati iterasi ini
                    if ($username === $_SESSION['username']) {
                        continue; // Lewati pengguna yang sedang login
                    }
                    ?>
                    <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['status']; ?></td>
                        <td>
                            <a class="button" href="edit_user.php?username=<?php echo $username; ?>">Edit</a>
                            <a class="button-delete" href="delete_user.php?username=<?php echo $username; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3>Aktivitas Terkini</h3>
        <ul>
            <li>Irsyad Dimas telah login pada 22 Oktober 2024.</li>
            <li>Cakra MAW mengubah profilnya pada 21 Oktober 2024.</li>
        </ul>

        <h3>Statistik Tugas</h3>
        <ul>
            <li>Total Tugas: 20</li>
            <li>Tugas Selesai: 15</li>
            <li>Tugas Dalam Proses: 5</li>
        </ul>

        <h3>Status Sistem</h3>
        <ul>
            <li>Uptime: 99.9%</li>
            <li>Permasalahan: Tidak ada yang dilaporkan.</li>
        </ul>

        <h3>Notifikasi Penting</h3>
        <ul>
            <li>Perlu memeriksa laporan bug terbaru.</li>
            <li>Pembaruan sistem dijadwalkan pada 1 November 2024.</li>
        </ul>
    </div>

</body>

</html>