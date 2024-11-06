<?php
// Mengimpor konfigurasi koneksi database dari file 'config2.php'.
require 'config2.php';

// Menjalankan query SQL untuk mengambil semua data dari tabel 'tasks'.
$query = $conn->query("SELECT * FROM tasks");

// Mengambil semua hasil query dalam bentuk array asosiatif untuk digunakan dalam tampilan.
$tasks = $query->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <!-- Memuat stylesheet untuk styling halaman -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/todoStyle.css">
</head>

<body>
    <!-- Navbar dengan logo aplikasi dan tombol tambah tugas -->
    <div class="navbar">
        <a href="todoApps.php" class="nav-logo">To-Do App</a>
        <div class="navbar-right">
            <a href="create.php" class="button button-add-task">Tambah Tugas</a>
        </div>
    </div>

    <div class="container">
        <!-- Section untuk menampilkan tugas yang Belum Selesai -->
        <h2>Belum Selesai</h2>
        <div class="task-container">
            <?php foreach ($tasks as $task): ?>
                <?php if ($task['status'] == 'Belum Selesai'): ?>
                    <!-- Kartu tugas yang menunjukkan judul, deskripsi, deadline, dan status -->
                    <div class="task-card belum-selesai">
                        <h3><?= htmlspecialchars($task['judul']) ?></h3>
                        <p><?= htmlspecialchars($task['task']) ?></p>
                        <p>DeadLine: <?= htmlspecialchars($task['due_date']) ?></p>
                        <p><strong>Status:</strong> <?= htmlspecialchars($task['status']) ?></p>
                        <div class="actions">
                            <a href="update.php?id=<?= $task['id'] ?>" class="edit">Edit</a>
                            <a href="deleteTask.php?id=<?= $task['id'] ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Delete</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- Section untuk tugas yang On Progress -->
        <h2>On Progress</h2>
        <div class="task-container">
            <?php foreach ($tasks as $task): ?>
                <?php if ($task['status'] == 'On Progress'): ?>
                    <div class="task-card on-progress">
                        <h3><?= htmlspecialchars($task['judul']) ?></h3>
                        <p><?= htmlspecialchars($task['task']) ?></p>
                        <p>DeadLine: <?= htmlspecialchars($task['due_date']) ?></p>
                        <p><strong>Status:</strong> <?= htmlspecialchars($task['status']) ?></p>
                        <div class="actions">
                            <a href="update.php?id=<?= $task['id'] ?>" class="edit">Edit</a>
                            <a href="deleteTask.php?id=<?= $task['id'] ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Delete</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <!-- Section untuk tugas yang Selesai -->
        <h2>Selesai</h2>
        <div class="task-container">
            <?php foreach ($tasks as $task): ?>
                <?php if ($task['status'] == 'Selesai'): ?>
                    <div class="task-card selesai">
                        <h3><?= htmlspecialchars($task['judul']) ?></h3>
                        <p><?= htmlspecialchars($task['task']) ?></p>
                        <p>DeadLine: <?= htmlspecialchars($task['due_date']) ?></p>
                        <p><strong>Status:</strong> <?= htmlspecialchars($task['status']) ?></p>
                        <div class="actions">
                            <a href="update.php?id=<?= $task['id'] ?>" class="edit">Edit</a>
                            <a href="deleteTask.php?id=<?= $task['id'] ?>" class="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?')">Delete</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>