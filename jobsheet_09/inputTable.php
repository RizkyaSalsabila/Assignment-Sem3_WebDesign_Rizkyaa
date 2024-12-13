<?php
    //untuk menghubungkan ke database
    include 'koneksi.php';

    //input username and password
    $username = "admin";
    $password = "123";

    //penerapan md5
    $hashed_password = md5($password);

    //kode SQL untuk input
    $sql = "INSERT INTO user 
    (id, username, password, level) VALUES
    (2, '$username', '$hashed_password', 2)";

    //cek koneksi
    if (!$connect) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }

    //cek penambahan data
    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil dimasukkan";
    } else {
        echo "Gagal saat memasukkan data : " . mysqli_error($connect);
    }

    //tutup koneksi
    $connect->close();
?>