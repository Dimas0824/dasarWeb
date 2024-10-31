<?php
$servername = "LAPTOP-VMVSF6A7\\MSSQLSERVER2";
$database = "todoapp";
$username = "";
$password = "";

try {
    $conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
