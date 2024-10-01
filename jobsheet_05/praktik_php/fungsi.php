<?php
    //buat fungsi
    function perkenalan($nama, $salam) {
        echo $salam . ", ";
        echo "Perkenalkan nama saya " . $nama . "<br/>";
        echo "Senang berkenalan dengan Anda<br><br>";
    }

    //panggil fungsi perkenalan()
    perkenalan("Hamdana (*-*)", "Hello");
    echo "<hr>";

    $saya = "Elok (^,^)";
    $ucapanSalam = "Selamat pagi";
    //panggil fungsi perkenalan() kedua
    perkenalan($saya, $ucapanSalam);
?>