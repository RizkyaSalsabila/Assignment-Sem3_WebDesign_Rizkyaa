<?php
    //deklarasi
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prakwebdb";

    //variabel untuk koneksi
    $connect = new mysqli($servername, $username, $password, $dbname);

    //cek koneksi
    if ($connect->connect_error) {
        die("Koneksi gagal : " . $connect->connect_error);
    } else {
        echo "";
    }
?>