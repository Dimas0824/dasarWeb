<?php
require_once("config.php");

// Query untuk mengambil data sepatu
$sql = "SELECT * FROM sepatu";
$stmt = $conn->query($sql);

// Memeriksa apakah query berhasil
if ($stmt === false) {
    die("Query failed: " . print_r($conn->errorInfo(), true));
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
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
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
    // Menutup koneksi dengan mengatur $stmt dan $conn ke null
    $stmt = null;
    $conn = null;
    ?>
</body>

</html>