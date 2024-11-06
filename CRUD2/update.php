<?php
// Mengimpor file 'updateTask.php' yang berisi logika untuk mengambil data tugas berdasarkan ID dan memperbarui tugas.
require_once 'updateTask.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Meta tag untuk pengaturan viewport agar halaman responsif di perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tugas</title>
    <!-- Mengimpor stylesheet untuk gaya umum dan khusus halaman update -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/update.css">
</head>

<body>
    <!-- Navbar dengan logo aplikasi dan tombol untuk menambah tugas -->
    <div class="navbar">
        <a href="todoApps.php" class="nav-logo">To-Do App</a>
        <div class="navbar-right">
            <a href="create.php" class="button button-add-task">Tambah Tugas</a>
        </div>
    </div>

    <div class="container">
        <!-- Judul untuk halaman Edit Tugas -->
        <h2>Edit Tugas</h2>

        <!-- Menampilkan form edit hanya jika data tugas ($task) ditemukan -->
        <?php if ($task): ?>
            <!-- Form untuk mengupdate tugas, mengirim data ke 'updateTask.php' dengan metode POST -->
            <form action="updateTask.php?id=<?= $task['id'] ?>" method="post">
                <!-- Field ID tugas yang disembunyikan untuk keperluan update -->
                <input type="hidden" name="id" value="<?= $task['id'] ?>">

                <!-- Input untuk judul tugas, dengan nilai default dari data tugas -->
                <label for="judul">Judul Tugas:</label>
                <input type="text" id="judul" name="judul" value="<?= htmlspecialchars($task['judul']) ?>" required>

                <!-- Textarea untuk deskripsi tugas, dengan nilai default dari data tugas -->
                <label for="task">Deskripsi:</label>
                <textarea id="task" name="task" required><?= htmlspecialchars($task['task']) ?></textarea>

                <!-- Dropdown untuk memilih status tugas, dengan status saat ini terpilih secara otomatis -->
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Belum Selesai" <?= $task['status'] == 'Belum Selesai' ? 'selected' : '' ?>>Belum Selesai</option>
                    <option value="On Progress" <?= $task['status'] == 'On Progress' ? 'selected' : '' ?>>On Progress</option>
                    <option value="Selesai" <?= $task['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
                </select>

                <!-- Input untuk tanggal selesai tugas, dengan nilai default dari data tugas -->
                <label for="due_date">Tanggal Selesai:</label>
                <input type="date" id="due_date" name="due_date" value="<?= htmlspecialchars($task['due_date']) ?>" required>

                <!-- Tombol untuk mengirim data update ke server -->
                <button type="submit" class="submit">Update Tugas</button>

                <!-- Tombol untuk kembali ke halaman utama To-Do App -->
                <button class="back-button"><a href="todoApps.php">Kembali</a></button>
            </form>
        <?php else: ?>
            <!-- Pesan ditampilkan jika data tugas tidak ditemukan -->
            <p>Data tugas tidak ditemukan.</p>
        <?php endif; ?>
    </div>

</body>

</html>