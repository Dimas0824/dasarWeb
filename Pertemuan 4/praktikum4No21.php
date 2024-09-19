<?php
//soal cerita no 21
$nilaiSiswa = [85,92,58,64,90,55,88,79,70,96];
rsort($nilaiSiswa);
$skorTotal = 0;

//menghapus nilai tertinggi dan terendah
array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2, 2);

foreach($nilaiSiswa as $skor){
    $skorTotal += $skor;
}

echo "rsort: " . implode(", ", $nilaiSiswa) . "<br>";

echo "Skor Total: $skorTotal";