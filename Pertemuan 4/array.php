<?php
$nilaiSiswa =[85,92,78,64,90,55,88,79,70,96];

$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(",",$nilaiLulus);

// no 5-6
$daftarKaryawan =[
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David',5],
    ['Eva', 6]
];

$karyawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] >= 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br><br> Daftar karyawan dengan pengalaman kerja lebih dari lima tahun: " . implode(",",$karyawanPengalamanLimaTahun);

//no 9-10
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$matakuliah = 'Fisika';
echo "<br><br>Daftar nilai mahasiswa dalam mata kuliah $matakuliah: <br>";
foreach ($daftarNilai[$matakuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

//soal cerita no 13-14
$nilaiSiswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

//menghitung rata-rata
$totalNilai = array_sum($nilaiSiswa);
$jumlahSiswa = count($nilaiSiswa);
$rataRata = $totalNilai / $jumlahSiswa;
echo "<br><br>Rata-rata nilai siswa: $rataRata <br>";

//tampil siswa diatas rata rata
echo "Siswa yang mendapat nilai diatas rata-rata: <br>";
foreach ($nilaiSiswa as $siswa => $nilai) {
    if ($nilai >= $rataRata) {
        echo "$siswa, Nilai: $nilai <br>";
    }
}


?>