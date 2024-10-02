<?php
    //no 15
    // $pesan = "Saya arek malang";
    // echo strrev($pesan) . "<br>";


    //no 16
    $pesan = "Saya arek malang";

    # ubah variabel $pesan menjadi array dengan perintah explode
    $pesanPerKata = explode(" ", $pesan);

    # ubah setiap kata dalam array menjadi kebalikannya
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), ($pesanPerKata));

    #gabungkan kembali array menjadi string
    $pesan = implode(" ", $pesanPerKata);

    echo $pesan . "<br>";
?>