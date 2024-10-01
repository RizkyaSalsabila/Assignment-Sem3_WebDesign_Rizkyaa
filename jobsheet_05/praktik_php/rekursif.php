<?php
    //no 9
    // function tampilkanHaloDunia() {
    //     echo "Halo Dunia! <br>";

    //     tampilkanHaloDunia();
    // }

    // tampilkanHaloDunia();


    //no.10
    function tampilkanAngka(int $jumlah, int $indeks = 1) {
        echo "Perulangan ke - {$indeks} <br>";

        //kondisi panggil diri sendiri selama $indeks <= $jumlah
        if ($indeks < $jumlah) {
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }

    tampilkanAngka(20);
?>