<?php
//soal cerita no 21
$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];
rsort($nilaiSiswa);
$skorTotal = 0;

//menghapus nilai tertinggi
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
//menghapus nilai terendah
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

foreach($nilaiSiswa as $skor){
    $skorTotal += $skor;
}

echo "rsort: " . implode(", ", $nilaiSiswa) . "<br>";

echo "Skor Total: $skorTotal";