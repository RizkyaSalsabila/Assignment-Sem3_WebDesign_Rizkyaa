<?php
    //Koneksi ke Database
    $koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

    //Cek Koneksi
    if (!$koneksi) {
        die("Koneksi Gagal : " . mysqli_connect_error());
    }

    //Query untuk membuat tabel user
    $sql = "CREATE TABLE user (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    //Eksekusi Query
    if (mysqli_query($koneksi, $sql)) {
        echo "Table user berhasil dibuat.";
    } else {
        echo "Error : " . mysqli_error($koneksi);
    }

    //Tutup koneksi
    mysqli_close($koneksi);
?>