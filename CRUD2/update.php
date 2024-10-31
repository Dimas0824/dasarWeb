<?php
include 'updateTask.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Tugas</title>
</head>

<body>
    <h2>Edit Tugas</h2>
    <?php if ($task): ?>
        <form action="updateTask.php" method="post">
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

            <button type="submit">Update Tugas</button>
            <button><a href="todoApps.php">Kembali</a></button>
        </form>
    <?php else: ?>
        <p>Data tugas tidak ditemukan.</p>
    <?php endif; ?>
</body>

</html>