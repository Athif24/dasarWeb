<?php
    $myArray = array(); //Array Kosong
    if (empty($myArray)) {
        echo "Array tidak terdenfinisi atau kosong. <br>";
    } else {
        echo "Array terdefinisi dan tidak kosong. <br>";
    }

    $nonExistentVar = false;
    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong. <br>";
    } else {
        echo "Variabel terdefinisi dan tidak kosong. <br>";
    }
?>