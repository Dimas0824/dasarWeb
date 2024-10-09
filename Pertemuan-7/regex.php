<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo 'Huruf kecil ditemukan!<br><br>';
} else {
    echo 'Tidak ada huruf kecil!<br><br>';
}

//tambahan kode no 5-8
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan: ' . $matches[0] . '<br><br>';
} else {
    echo 'Tidak ada yang cocok';
}

//tambahan kode 9-12
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I Like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text; // output: I Like banana pie
