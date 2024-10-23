<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari session
$username = $_SESSION['username'];
$users = $_SESSION['users'];

// Cek apakah form sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $nim = htmlspecialchars(trim($_POST['nim']));

    if (!empty($name) && !empty($phone) && !empty($nim)) {
        // Proses Upload Foto Profil
        $profile_picture = $_SESSION['users'][$username]['profile_picture'] ?? ''; // Ambil gambar lama
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
            $uploads_dir = 'uploads/';
            if (!is_dir($uploads_dir)) mkdir($uploads_dir, 0777, true);

            $profile_picture = basename($_FILES['profile_picture']['name']);
            move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploads_dir . $profile_picture);
        }

        // Simpan perubahan ke array users dalam session
        $_SESSION['users'][$username] = [
            'name' => $name,
            'phone' => $phone,
            'nim' => $nim,
            'profile_picture' => $profile_picture
        ];

        // Kembali ke halaman index setelah update
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Nama lengkap, NIM, dan nomor telepon harus diisi.');</script>";
    }
}
