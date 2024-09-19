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

echo"<br><br>";

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

echo"<br><br>";

//no 7
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And: $hasilAnd <br>";
echo "Hasil Or: $hasilOr <br>";
echo "Hasil Not A: $hasilNotA <br>";
echo "Hasil Not B: $hasilNotB <br>";

echo"<br><br>";

//no 11
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

//melengkapi no 12
echo "Hasil A += B: $a <br>";
echo "Hasil A -= B: $a <br>";
echo "Hasil A *= B: $a <br>";
echo "Hasil A /= B: $a <br>";
echo "Hasil A %= B: $a <br>";

echo"<br><br>";

//no 14
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//melengkapi no 15
echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik <br>";

echo"<br><br>";

//soal cerita no 16-17
$kursiRestoran = 45;
$kursiTerisi = 28;
$kursiKosong = $kursiRestoran - $kursiTerisi;
$presentaseKosong = $kursiKosong / $kursiRestoran * 100;
echo "Presentase kursi kosong pada restoran: " . round($presentaseKosong, 2) . "%";

?>
