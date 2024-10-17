<!DOCTYPE html>
<html>

<head>
    <title>Form Input Mahasiswa</title>
    <link rel="stylesheet" href="global.css">
</head>

<body>
    <div class="container">
        <header>
            <h2>Form Input Data Mahasiswa</h2>
        </header>
        <div class="content">
            <?php
            // Langkah pertama: Meminta jumlah form yang ingin ditampilkan
            if (!isset($_POST['jumlah_form']) && !isset($_POST['nama'])) {
            ?>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="jumlah_form">Jumlah Form:</label>
                        <input type="number" name="jumlah_form" id="jumlah_form" class="form-control" min="1" required>
                    </div>
                    <div class="info">Masukkan jumlah form yang diinginkan</div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Buat Form</button>
                    </div>
                </form>
            <?php
            } else if (isset($_POST['nama']) && isset($_POST['nim'])) {
                // Proses menampilkan data yang diterima
                $nama = $_POST['nama'];
                $nim = $_POST['nim'];
                echo "<h3>Data Mahasiswa</h3>";
                echo "<table border='1' cellpadding='10' cellspacing='0'>";
                echo "<thead><tr><th>No</th><th>Nama</th><th>NIM</th></tr></thead><tbody>";
                for ($i = 0; $i < count($nama); $i++) {
                    echo "<tr><td>" . ($i + 1) . "</td><td>" . htmlspecialchars($nama[$i]) . "</td><td>" . htmlspecialchars($nim[$i]) . "</td></tr>";
                }
                echo "</tbody></table>";
                echo "<div class='btn-group'><a href='" . $_SERVER['PHP_SELF'] . "' class='btn btn-primary'>Kembali</a></div>";
            }
            // Langkah kedua: Menampilkan form input nama dan NIM sesuai jumlah yang diminta
            if (isset($_POST['jumlah_form'])) {
                $jumlah_form = (int)$_POST['jumlah_form'];
            ?>
                <form method="post" action="">
                    <?php for ($i = 1; $i <= $jumlah_form; $i++) { ?>
                        <h3 class="info">Mahasiswa <?php echo $i; ?></h3>
                        <div class="form-group">
                            <label for="nama_<?php echo $i; ?>">Nama:</label>
                            <input type="text" name="nama[]" id="nama_<?php echo $i; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nim_<?php echo $i; ?>">NIM:</label>
                            <input type="text" name="nim[]" id="nim_<?php echo $i; ?>" class="form-control" required>
                        </div>
                    <?php } ?>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <button type="reset" class="btn btn-danger">Reset Form</button>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
</body>