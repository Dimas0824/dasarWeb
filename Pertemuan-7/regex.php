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
$text = 'I Like apple pie <br><br>';
$new_text = preg_replace($pattern, $replacement, $text);

echo $new_text; // output: I Like banana piee

//tambahan kode 13-16
$pattern = '/go*d/'; //cocokan "god", "good", "gooood", dll
$text = 'god is good';

if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan: ' . $matches[0] . '<br><br>';
} else {
    echo 'Tidak ada yang cocok';
}

//tambahan kode 17
$pattern = '/go?d/'; //cocokan "god", "gd"
$text = 'god is good';

if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan: ' . $matches[0] . '<br><br>';
} else {
    echo 'Tidak ada yang cocok';
}

//tambahan kode 18
$pattern = '/g(o{1,2}d)/'; // Cocokkan "god" dan "good"
$text = 'god is good';

if (preg_match($pattern, $text, $matches)) {
    echo 'Cocokkan: ' . $matches[0] . '<br><br>';
} else {
    echo 'Tidak ada yang cocok';
}
