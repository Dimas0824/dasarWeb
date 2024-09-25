<?php
//membuat fungsi
function perkenalan($name, $salam) {
    echo $salam.", ";
    echo"Perkenalkan, nama saya ".$name." <br/>";
    echo"Senang berkenalan dengan anda <br/>";
}

//mmemanggil fungsi yang sudah dibuat
perkenalan("Dimas", "Halo");

echo"<hr>";

$saya = "Zidan";
$ucapanSalam = "selamat pagi";

perkenalan($saya, $ucapanSalam);

?>