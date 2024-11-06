<?php
// Mengimpor konfigurasi koneksi database dari file 'config2.php'.
require_once('config2.php');

// Memeriksa apakah parameter 'id' ada dalam URL menggunakan metode GET.
if (isset($_GET['id'])) {
    // Mengambil nilai 'id' dari URL dan menyimpannya dalam variabel $id.
    $id = $_GET['id'];

    // Mempersiapkan pernyataan SQL untuk menghapus task dari tabel 'tasks' berdasarkan ID yang diberikan.
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");

    // Mengeksekusi pernyataan SQL dengan memasukkan nilai ID yang telah diambil dari URL.
    $stmt->execute([$id]);

    // Mengarahkan pengguna kembali ke halaman 'todoApps.php' setelah task berhasil dihapus.
    header('Location: todoApps.php');
    exit; // Menghentikan eksekusi script setelah redirect untuk memastikan tidak ada kode lain yang dijalankan.
}
