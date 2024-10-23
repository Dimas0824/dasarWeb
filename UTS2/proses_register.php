<?php
session_start();
include('users.php'); // masukkan data user

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // sanitasi inputan
    $username = htmlspecialchars(trim($_POST['username']));
    $name = htmlspecialchars(trim($_POST['name']));
    $nim = htmlspecialchars(trim($_POST['nim']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $password = htmlspecialchars(trim($_POST['password']));

    // check apakah username sudah ada
    if (isset($_SESSION['users'][$username])) {
        echo "<script>alert('Username sudah digunakan.'); window.location.href='register.php';</script>";
        exit();
    }

    // upload foto profil
    $profile_picture = 'image.jpg'; // profile default
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $profile_picture = basename($_FILES['profile_picture']['name']);
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_dir . $profile_picture);
    }

    // menyimpan data di session
    $_SESSION['users'][$username] = [
        'name' => $name,
        'nim' => $nim,
        'email' => $email,
        'phone' => $phone,
        'password' => $password,
        'profile_picture' => $profile_picture,
        'status' => 'active'
    ];

    // kembali ke halaman login
    header("Location: login.php");
    exit();
}
