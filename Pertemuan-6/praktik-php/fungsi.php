<?php
//membuat fungsi
function perkenalan($name, $salam = "Assalamualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $name . " <br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

//mmemanggil fungsi yang sudah dibuat
perkenalan("Dimas", "Halo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "selamat pagi";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);