<?php
session_start();

// Cek apakah form telah dikirimkan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data nama dan nim
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    // Loop data yang diterima dan simpan ke sesi
    for ($i = 0; $i < count($nama); $i++) {
        $_SESSION['mahasiswa'][] = [
            'nama' => $nama[$i],
            'nim' => $nim[$i]
        ];
    }
}
