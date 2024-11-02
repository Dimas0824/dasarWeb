<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas Baru</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/tambah.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="todoApps.php" class="nav-logo">To-Do App</a>
        <div class="navbar-right">
            <a href="create.php" class="button button-add-task">Tambah Tugas</a>
        </div>
    </div>

    <!-- Form Container -->
    <div class="container">
        <form action="createTask.php" method="POST">
            <div class="form-group">
                <h2>Tambah Tugas Baru</h2>
                <label for="judul">Judul Tugas:</label>
                <input type="text" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="task">Deskripsi:</label>
                <textarea id="task" name="task" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Belum Selesai">Belum Selesai</option>
                    <option value="On Progress">On Progress</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="due_date">Tanggal Selesai:</label>
                <input type="date" id="due_date" name="due_date" required>
            </div>
            <button type="submit">Simpan Tugas</button>
        </form>
    </div>
</body>

</html>