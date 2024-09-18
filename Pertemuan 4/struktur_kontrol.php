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
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

?>

p