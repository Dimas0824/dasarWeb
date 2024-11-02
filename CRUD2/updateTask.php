<?php
// Menyertakan konfigurasi database
require_once 'config2.php';

// Mendefinisikan variabel $task untuk data tugas
$task = null;

// Mengecek apakah ada parameter 'id' dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Mengambil data tugas berdasarkan ID dari database
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
    $stmt->execute([$id]);
    $task = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Redirect jika data tugas tidak ditemukan
if (!$task) {
    header("Location: todoApps.php");
    exit;
}

// Mengecek apakah form disubmit menggunakan metode POST untuk proses update data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $taskDescription = $_POST['task'];
    $status = $_POST['status'];
    $due_date = $_POST['due_date'];

    // Proses update data tugas ke database
    $stmt = $conn->prepare("UPDATE tasks SET judul = ?, task = ?, status = ?, due_date = ? WHERE id = ?");

    // Mengeksekusi query update dengan parameter sebagai array
    if ($stmt->execute([$judul, $taskDescription, $status, $due_date, $id])) {
        header("Location: todoApps.php");
        exit;
    } else {
        echo "Gagal memperbarui data.";
    }
}
