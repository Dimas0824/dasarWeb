<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
}else if($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
}else if($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: C";
}else if($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

//no 5-6
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

//no 9-10
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

//no 14
$skorUjian = [85,92,78,96,88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br><br>Total skor yang diperoleh: $totalSkor <br><br>";

//no17-18
$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];

foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak Lulus) <br>";
    }else{
        echo "Nilai: $nilai (Lulus) <br>";
    }
}

//soal cerita no 21-22
$nilaiUjian = [85,92,78,64,90,75,88,79,70,96];
rsort($nilaiUjian);
$skorTotal = 0;

//menghapus nilai tertinggi dan terendah
array_splice($nilaiUjian, 0, 2); //menghapus 2 elemen pertama
array_splice($nilaiUjian, -2, 2); //menghapus 2 elemen terakhir

foreach($nilaiUjian as $skor){
    $skorTotal += $skor;
}

echo "<br> Skor Total: $skorTotal";

?>