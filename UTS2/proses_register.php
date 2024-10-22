<?php
$users = include('users.php'); // Memuat data pengguna yang ada

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitasi data input
    $username = htmlspecialchars(trim($_POST['username']));
    $name = htmlspecialchars(trim($_POST['name']));
    $nim = htmlspecialchars(trim($_POST['nim']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $password = htmlspecialchars(trim($_POST['password'])); // Disimpan tanpa hashing untuk saat ini

    // Validasi format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid!";
        exit();
    }

    // Menangani unggahan file untuk foto profil
    $profile_picture = 'image.jpg'; // Foto profil default
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Buat direktori jika belum ada
        }

        $file_name = basename($_FILES["profile_picture"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        // Memeriksa format file dan memindahkan file yang diunggah
        if (in_array($imageFileType, $allowed_types) && move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            $profile_picture = $file_name; // Update foto profil jika berhasil diunggah
        } else {
            echo "Error: Hanya file JPG, JPEG, PNG & GIF yang diizinkan atau ada kesalahan dalam mengunggah file.";
            exit();
        }
    }

    // Menambahkan pengguna ke array
    $users[$username] = [
        'name' => $name,
        'nim' => $nim,
        'email' => $email,
        'phone' => $phone,
        'password' => $password, // Password disimpan langsung, tanpa hashing
        'profile_picture' => $profile_picture,
        'status' => 'active'
    ];

    // Tulis kembali pengguna ke file users.php menggunakan fwrite
    $file = fopen('users.php', 'w'); // Buka file untuk ditulis
    if ($file) {
        fwrite($file, "<?php return " . var_export($users, true) . ";\n"); // Tulis data ke file
        fclose($file); // Tutup file
    } else {
        echo "Gagal membuka file untuk menyimpan data pengguna.";
        exit();
    }

    // Redirect ke halaman login setelah berhasil mendaftar
    header('Location: login.php');
    exit();
}
