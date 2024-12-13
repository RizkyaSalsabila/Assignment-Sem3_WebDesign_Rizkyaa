<?php
    //untuk menghubungkan ke database
    include 'koneksi.php';

    //kode pembuatan tabel
    $sql = "CREATE TABLE IF NOT EXISTS user (
            id INT NOT NULL AUTO_INCREMENT,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL,
            PRIMARY KEY (id)
    )";

    //Eksekusi Query
    if ((mysqli_query($koneksi, $sql))) {
        echo "Table user berhasil dibuat.";
    } else {
        echo "Error : " . $connect->error;
    }

    $connect->close();
?>