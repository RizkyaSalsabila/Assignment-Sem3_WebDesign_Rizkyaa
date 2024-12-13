<?php
    //untuk menghubungkan ke database
    include 'koneksi.php';

    //untuk mendapatkan username dan password
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //pembuatan query untuk menampilkan
    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);

    //cek login
    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
?>
    Anda berhasil login. Silahkan menuju
    <a href = "homeSession.php">Halaman HOME</a> 
<?php
    } else {
?>
    Gagal login. Silahkan login lagi
    <a href = "sessionLoginForm.html">Login Kembali</a>
<?php
    echo mysqli_error($connect);
}
?>