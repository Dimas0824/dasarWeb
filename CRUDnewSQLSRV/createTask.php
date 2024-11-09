<?php
// Mengimpor konfigurasi koneksi database dari file 'config2.php'.
require_once('config2.php');

// Memeriksa apakah request menggunakan metode POST untuk memproses pengiriman data form.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data yang dikirim melalui form dan menyimpannya dalam variabel sesuai dengan input user.
    $judul = $_POST['judul'];       // Judul dari task yang akan disimpan.
    $task = $_POST['task'];         // Deskripsi dari task yang akan disimpan.
    $status = $_POST['status'];     // Status dari task (misalnya 'pending' atau 'selesai').
    $due_date = $_POST['due_date']; // Tanggal jatuh tempo dari task.

    // Mempersiapkan pernyataan SQL untuk menyisipkan data baru ke dalam tabel 'tasks' dengan parameter yang akan di-bind.
    $sql = "INSERT INTO tasks (judul, task, status, due_date) VALUES (?, ?, ?, ?)";
    
    // Parameter yang akan di-bind dalam query
    $params = [$judul, $task, $status, $due_date];

    // Mempersiapkan dan mengeksekusi pernyataan SQL dengan memasukkan data yang telah diambil dari form.
    $stmt = sqlsrv_query($conn, $sql, $params);

    // Memeriksa apakah query berhasil dieksekusi
    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true)); // Menampilkan pesan kesalahan jika terjadi error
    }

    // Mengarahkan pengguna kembali ke halaman 'todoApps.php' setelah data berhasil disimpan.
    header('Location: todoApps.php');
    exit; // Menghentikan eksekusi script setelah redirect untuk memastikan tidak ada kode lain yang dijalankan.
}
