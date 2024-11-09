<?php
// Konfigurasi koneksi ke database
$serverName = "LAPTOP-VMVSF6A7\\MSSQLSERVER2"; // Nama server SQL Server
$connectionOptions = [
    "Database" => "todoapp",
    "Uid" => "",  // Username kosong
    "PWD" => ""   // Password kosong
];

// Membuat koneksi ke database menggunakan sqlsrv_connect
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Memeriksa koneksi
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Koneksi berhasil!";
}

// Pastikan untuk menutup koneksi setelah selesai
$conn = null;
