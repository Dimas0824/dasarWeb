<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasil tambah: $hasilTambah <br>";
echo "hasil kurang: $hasilKurang <br>";
echo "hasil kali: $hasilKali <br>";
echo "hasil bagi: $hasilBagi <br>";
echo "sisa bagi: $sisaBagi <br>";
echo "pangkat: $pangkat <br>";

//no 5
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// melengkapi no 6
echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil atau Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar atau Sama: $hasilLebihBesarSama <br>";

?>
