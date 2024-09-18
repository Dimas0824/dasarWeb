<?php
$kursiRestoran = 45;
$kursiTerisi = 28;
$kursiKosong = $kursiRestoran - $kursiTerisi;
$presentaseKosong = $kursiKosong / $kursiRestoran * 100;
echo "Presentase kursi kosong pada restoran: " . round($presentaseKosong) . "%";

?>
