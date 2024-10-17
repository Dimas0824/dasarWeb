<?php
if (isset($_FILES['files'])) {
    $errors = [];
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    // Loop untuk memproses setiap file yang diunggah
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validasi ekstensi file
        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "$file_name: Ekstensi file tidak diizinkan (hanya jpg, jpeg, png, gif).";
        }

        // Validasi ukuran file (maksimal 2 MB)
        if ($file_size > 2097152) {
            $errors[] = "$file_name: Ukuran file tidak boleh lebih dari 2 MB.";
        }

        // Jika tidak ada error, pindahkan file ke folder tujuan
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
