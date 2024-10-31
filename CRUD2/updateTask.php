<?php
require 'config2.php';

$task = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $task = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Redirect jika task tidak ditemukan
if (!$task) {
    header("Location: todoApps.php");
    exit;
}

// Jika metode request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $taskDescription = $_POST['task'];
    $status = $_POST['status'];
    $due_date = $_POST['due_date'];

    $stmt = $conn->prepare("UPDATE tasks SET judul = :judul, task = :task, status = :status, due_date = :due_date WHERE id = :id");
    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':task', $taskDescription);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':due_date', $due_date);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: todoApps.php");
    exit;
}
