<?php
require_once('config2.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: todoApps.php');
    exit;
}
