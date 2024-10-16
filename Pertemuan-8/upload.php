<?php
if (isset($_POST['submit'])) {
    $targetdir = __DIR__ . "uploads/";
    $targetfile = "$targetdir" . basename($_FILES['myfile']['name']);

    echo $targetdir;

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfile)) {
        echo "File berhasil diunggah";
    } else {
        echo "Gagal mengunggah file.";
    }
}
