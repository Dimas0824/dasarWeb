<?php
session_start();
$users = include('users.php'); // Mengambil data dari file users.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars(trim($_POST['password']));

    // Cek apakah email valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!');</script>";
        exit();
    }

    // Cari pengguna berdasarkan email
    $user_found = null;
    foreach ($users as $username => $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $user_found = $username;
            break;
        }
    }

    // Jika pengguna ditemukan, login berhasil
    if ($user_found !== null) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user_found;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Email atau password salah!');</script>";
        header("Refresh:2; url=login.php");
        exit();
    }
}
