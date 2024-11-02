<?php
require_once 'updateTask.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/update.css">
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
        <h2>Edit Tugas</h2>
        <?php if ($task): ?>
            <form action="updateTask.php?id=<?= $task['id'] ?>" method="post">
                <input type="hidden" name="id" value="<?= $task['id'] ?>">

                <label for="judul">Judul Tugas:</label>
                <input type="text" id="judul" name="judul" value="<?= htmlspecialchars($task['judul']) ?>" required>

                <label for="task">Deskripsi:</label>
                <textarea id="task" name="task" required><?= htmlspecialchars($task['task']) ?></textarea>

                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Belum Selesai" <?= $task['status'] == 'Belum Selesai' ? 'selected' : '' ?>>Belum Selesai</option>
                    <option value="On Progress" <?= $task['status'] == 'On Progress' ? 'selected' : '' ?>>On Progress</option>
                    <option value="Selesai" <?= $task['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                </select>

                <label for="due_date">Tanggal Selesai:</label>
                <input type="date" id="due_date" name="due_date" value="<?= htmlspecialchars($task['due_date']) ?>" required>

                <button type="submit" class="submit">Update Tugas</button>
                <button class="back-button"><a href="todoApps.php">Kembali</a></button>
            </form>
        <?php else: ?>
            <p>Data tugas tidak ditemukan.</p>
        <?php endif; ?>
    </div>

</body>

</html>