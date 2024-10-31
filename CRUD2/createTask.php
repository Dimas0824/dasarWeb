<?php
require_once('config2.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $task = $_POST['task'];
    $status = $_POST['status'];
    $due_date = $_POST['due_date'];

    $stmt = $conn->prepare("INSERT INTO tasks (judul, task, status, due_date) VALUES (?, ?, ?, ?)");
    $stmt->execute([$judul, $task, $status, $due_date]);

    header('Location: todoApps.php');
    exit;
}
