<?php
// Membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Menampilkan hasil perhitungan umur
echo "Umur saya adalah " . hitungUmur(2004, 2024) . " tahun"; // Sesuaikan dengan tahun lahir Anda
