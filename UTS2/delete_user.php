<?php
session_start();

// Cek apakah username telah diberikan dan pengguna tersebut ada di dalam session
if (!isset($_GET['username']) || !isset($_SESSION['users'][$_GET['username']])) {
    header("Location: index.php");
    exit();
}

$username = $_GET['username'];

// Hapus pengguna dari session
unset($_SESSION['users'][$username]);

// Redirect kembali ke halaman utama setelah menghapus pengguna
header("Location: index.php");
exit();
