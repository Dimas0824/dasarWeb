<?php
require 'config2.php';

// Memeriksa apakah parameter 'id' ada dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk mengambil data tugas berdasarkan ID
    $query = "SELECT * FROM tasks WHERE id = ?";
    $params = [$id];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Mengambil hasil query
    $task = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
}

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['task'];
    $status = $_POST['status'];
    $due_date = $_POST['due_date'];

    // Query untuk mengupdate data tugas
    $updateQuery = "UPDATE tasks SET judul = ?, task = ?, status = ?, due_date = ? WHERE id = ?";
    $updateParams = [$judul, $deskripsi, $status, $due_date, $id];
    $updateStmt = sqlsrv_query($conn, $updateQuery, $updateParams);

    if ($updateStmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Redirect ke halaman utama setelah update
    header('Location: todoApps.php');
    exit;
}
