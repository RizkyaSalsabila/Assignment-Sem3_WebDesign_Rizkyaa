<?php
    //2.1
    echo "<b>-- PERCOBAAN 2.1 --</b><br>";
    $myArray = array();     //array masih kosong
    if (empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong.";
    } else {
        echo "Array terdefinisi dan tidak kosong.";
    }

    //2.2
    echo "<br><br><b>-- PERCOBAAN 2.2 --</b><br>";
    if (empty($nonExistentVar)) {
        echo "Variabel tidak terdefinisi atau kosong.";
    } else {
        echo "Variabel terdefinisi dan tidak kosong.";
    }
?>