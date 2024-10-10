<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="stylePost.css">
</head>

<body>
    <h1>Data Siswa</h1>

    <div id="slider">Click to show database</div> <!-- Tombol diatas halaman Slider -->
    <div id="tombolSlider">
        <table id="dataSiswa">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dataSiswa = [
                    ["nama" => "Andi", "umur" => 15, "kelas" => "10A", "alamat" => "Malang"],
                    ["nama" => "Siti", "umur" => 16, "kelas" => "10B", "alamat" => "Batu"],
                    ["nama" => "Budi", "umur" => 15, "kelas" => "10A", "alamat" => "Dinoyo"],
                    ["nama" => "Anton", "umur" => 25, "kelas" => "15A", "alamat" => "Dinoyo"]
                ];

                foreach ($dataSiswa as $siswa) {
                    echo "<tr>";
                    echo "<td>" . $siswa['nama'] . "</td>";
                    echo "<td>" . $siswa['umur'] . "</td>";
                    echo "<td>" . $siswa['kelas'] . "</td>";
                    echo "<td>" . $siswa['alamat'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <h2 id="rataRata"></h2>
    </div>

    <script>
        $(document).ready(function() { //DOM 
            $("#slider").click(function() { //ketika klik tombol slider
                $("#tombolSlider").slideToggle("medium"); //aksi ketika klik
            });

            // rata-rata umur
            var totalUmur = 0;
            var jumlah = 0;
            $("#dataSiswa tbody tr td:nth-child(2)").each(function() {
                totalUmur += parseInt($(this).text());
                jumlah++;
            });
            var rataRata = totalUmur / jumlah;
            $('#rataRata').text('Rata-rata Umur Siswa: ' + rataRata + ' Tahun');
        });
    </script>
</body>

</html>