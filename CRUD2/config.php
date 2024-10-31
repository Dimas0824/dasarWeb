<?php
$servername = "LAPTOP-VMVSF6A7\\MSSQLSERVER2";
$connectionOptions = array(
    "Database" => "CRUD",
);

// Membuat koneksi ke SQL Server
$conn = sqlsrv_connect($servername, $connectionOptions);

// Memeriksa apakah koneksi berhasil
if ($conn === false) {
    die("Connection failed: " . print_r(sqlsrv_errors(), true));
} else {
}
