<?php 
    $a = 10;
    $b = 5;

    //3.1 
    echo "<b>--- OPERATOR ARITMATIKA ---</b><br>";
    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Tambah $a dan $b adalah $hasilTambah<br>";
    echo "Hasil Kurang $a dan $b adalah $hasilKurang<br>";
    echo "Hasil Kali $a dan $b adalah $hasilKali<br>";
    echo "Hasil Bagi $a dan $b adalah $hasilBagi<br>";
    echo "Sisa Bagi $a dan $b adalah $sisaBagi<br>";
    echo "Hasil Pangkat $a dan $b adalah $pangkat<br><br>";


    //3.2
    echo "<br><b>--- OPERATOR PEMBANDING ---</b><br>";
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Apakah $a sama dengan $b?" . ($hasilSama ? ' true' : ' false') . "<br>";
    echo "Apakah $a tidak sama dengan $b?" . ($hasilTidakSama ? ' true' : ' false') . "<br>";
    echo "Apakah $a lebih kecil dari $b?" . ($hasilLebihKecil ? ' true' : ' false') . "<br>";
    echo "Apakah $a lebih besar dari $b?" . ($hasilLebihBesar ? ' true' : ' false') . "<br>";
    echo "Apakah $a lebih kecil sama dengan $b?" . ($hasilLebihKecilSama ? ' true' : ' false') . "<br>";
    echo "Apakah $a lebih besar sama dengan $b?" . ($hasilLebihBesarSama ? ' true' : ' false') . "<br>";


    //3.3
    echo "<br><br><b>--- OPERATOR LOGIKA ---</b><br>";
    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Apaka hasil $a dan $b?" . ($hasilAnd ? ' true' : ' false') . "<br>";
    echo "Apakah hasil $a atau $b?" . ($hasilOr ? ' true' : ' false') . "<br>";
    echo "Apakah bukan $a?" . ($hasilNotA ? ' true' : ' false') . "<br>";
    echo "Apakah bukan $b?" . ($hasilNotB ? ' true' : ' false') . "<br>";

?>