<?php
$servername = "LAPTOP-VMVSF6A7\\MSSQLSERVER2";
$database = "CRUD";
$username = "";
$password = "";

try {
    $conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
