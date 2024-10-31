<?php
require_once("config.php");

// Query untuk mengambil data sepatu
$sql = "SELECT * FROM sepatu";
$stmt = sqlsrv_query($conn, $sql);

// Memeriksa apakah query berhasil
if ($stmt === false) {
    die("Query failed: " . print_r(sqlsrv_errors(), true));
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sepatu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Daftar Sepatu</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['merk']; ?></td>
                    <td><?php echo $row['ukuran']; ?></td>
                    <td><?php echo $row['warna']; ?></td>
                    <td><?php echo number_format($row['harga'], 2, ',', '.'); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php
    // Menutup koneksi
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
    ?>
</body>

</html>