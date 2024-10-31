<?php
require 'config2.php';

$query = $conn->query("SELECT * FROM tasks");
$tasks = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="todoStyle.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="todoApps.php" class="nav-logo">To-Do App</a>
        <div class="navbar-right">
            <a href="create.php" class="button button-add-task">Tambah Tugas</a>
        </div>
    </div>

    <div class="container">
        <div class="task-container">
            <?php foreach ($tasks as $task): ?>
                <?php
                // Tentukan kelas status berdasarkan status tugas
                $statusClass = '';
                if ($task['status'] == 'Belum Selesai') {
                    $statusClass = 'belum-selesai';
                } elseif ($task['status'] == 'On Progress') {
                    $statusClass = 'on-progress';
                } elseif ($task['status'] == 'Selesai') {
                    $statusClass = 'selesai';
                }
                ?>
                <div class="task-card <?= $statusClass ?>">
                    <h3><?= htmlspecialchars($task['judul']) ?></h3>
                    <p><?= htmlspecialchars($task['task']) ?></p>
                    <p><strong>Status:</strong> <?= htmlspecialchars($task['status']) ?></p>
                    <div class="actions">
                        <a href="update.php?id=<?= $task['id'] ?>" class="edit">Edit</a>
                        <a href="deleteTask.php?id=<?= $task['id'] ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Delete</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>