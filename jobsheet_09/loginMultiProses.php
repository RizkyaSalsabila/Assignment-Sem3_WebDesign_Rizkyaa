<?php
    //untuk menghubungkan ke database
    include 'koneksi.php';

    //untuk mendapatkan username dan password
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //pembuatan query untuk menampilkan
    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['level'] == 1) {
        echo "Anda berhasil login. Silahkan menuju ";?>
        <a href = "homeAdmin.html">Halaman HOME</a>
    <?php
    } else if ($row['level'] == 2) {
        echo "Anda berhasil login. Silahkan menuju ";?>
        <a href = "homeGuest.html">Halaman HOME</a>
    <?php
    } else {
        echo "Anda gagal login. Silahkan ";?>
        <a href = "loginForm.html">Login Kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>