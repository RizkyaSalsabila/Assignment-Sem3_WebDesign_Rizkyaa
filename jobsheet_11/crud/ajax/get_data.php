<?php
    session_start();
    include 'koneksi.php';
    include 'csrf.php';

    $id = $_POST['id'];
    $query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";
    $sql = $db1->prepare($query);
    $sql->bind_param("i", $id);
    $sql->execute();
    $res1 = $sql->get_result();

    while ($row = $res1->fetch_assoc()) {
        $sh['id'] = $row["id"];
        $sh['nama'] = $row["nama"];
        $sh['jenis_kelamin'] = $row["jenis_kelamin"];
        $sh['alamat'] = $row["alamat"];
        $sh['no_telp'] = $row["no_telp"];
    }

    echo json_encode($sh);

    $sql->close();
    $db1->close();
?>