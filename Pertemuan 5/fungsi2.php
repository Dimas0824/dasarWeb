<?php
//membuat fungsi
function hitungUmur($thnLahir, $thnSekarang){
    $umur = $thnSekarang - $thnLahir;
    return $umur;
}

echo"Umur saya adalah " . hitungUmur(2004, 2024) . " tahun";

?>