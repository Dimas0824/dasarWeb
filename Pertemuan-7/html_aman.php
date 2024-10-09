<!DOCTYPE html>
<html>

<head>
    <title>Form Input PHP</title>
</head>

<body>
    <h2>Form Input PHP</h2>
    <?php
    // Inisialisasi variabel
    $namaErr = $emailErr = "";
    $nama = $email = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi nama (contoh: pastikan nama tidak kosong)
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi";
        } else {
            $nama = htmlspecialchars($_POST["nama"], ENT_QUOTES, 'UTF-8');
            echo "Nama berhasil disimpan!<br>";
        }
        // Validasi email
        $email = $_POST["email"];
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email berhasil disimpan!<br>";
        } else {
            $emailErr = "Format email tidak valid";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"><br>
        <span class="error"><?php echo $namaErr; ?></span><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br>
        <span class="error"><?php echo $emailErr; ?></span><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>