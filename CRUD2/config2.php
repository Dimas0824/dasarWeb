<?php
// Konfigurasi koneksi ke database
$servername = "LAPTOP-VMVSF6A7\\MSSQLSERVER2"; // Nama server SQL Server
$database = "todoapp"; // Nama database yang akan digunakan
$username = "";
$password = "";

try {
    // Membuat koneksi ke database menggunakan PDO dengan driver sqlsrv
    $conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);

    // Mengatur atribut error mode ke ERRMODE_EXCEPTION agar PDO melempar exception jika terjadi kesalahan
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Jika koneksi gagal, tampilkan pesan kesalahan dan hentikan eksekusi
    die("Koneksi gagal: " . $e->getMessage());
}
