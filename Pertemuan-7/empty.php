<?php

$myArray = array(); //array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong. <br><br>";
} else {
    echo "Array terdefinisi dan tidak kosong<br><br>";
}

if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.<br><br>";
} else {
    echo "Variabel terdefinisi dan tidak kosong.<br><br>";
}
