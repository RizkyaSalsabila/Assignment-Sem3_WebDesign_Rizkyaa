<?php
    //1.1
    echo "<b>-- PERCOBAAN 1.1 --</b><br>";
    $umur;
    if (isset($umur) && $umur >= 18) {
        echo "Anda sudah dewasa.";
    } else {
        echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    }

    //1.2
    echo "<br><br><b>-- PERCOBAAN 1.2 --</b><br>";
    $data = array("nama" => "Jane", "usia" => 25);
    if (isset($data["nama"])) {
        echo "Nama : " . $data["nama"];
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array";
    }
?>