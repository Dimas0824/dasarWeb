<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas Baru</title>
    <link rel="stylesheet" href="todoStyle.css">
</head>

<body>
    <h2>Tambah Tugas Baru</h2>
    <form action="createTask.php" method="POST">
        <div class="form-group">
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
</body>

</html>