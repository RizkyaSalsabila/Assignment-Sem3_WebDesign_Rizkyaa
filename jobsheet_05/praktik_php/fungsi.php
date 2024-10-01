<?php
    //buat fungsi
    function perkenalan($nama, $salam = "Assalamualaikum") {
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
    perkenalan($saya);


    //no 7
    //buat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah : " . hitungUmur(2004, 2023) . " tahun";
?>