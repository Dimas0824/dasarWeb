<?php
session_start();
include('users.php'); // masukkan data user

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = htmlspecialchars(trim($_POST['password']));

    // cari user berdasarkan email
    foreach ($_SESSION['users'] as $username => $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            // Login sukse
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        }
    }

    // Login gagal
    echo "<script>alert('Email atau password salah!'); window.location.href='login.php';</script>";
    exit();
}
