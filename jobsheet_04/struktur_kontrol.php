<?php
    //4.1
    echo "<b>--- STRUKTUR KONDISIONAL ---</b><br>";
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai Huruf : A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai Huruf : B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai Huruf : C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai Huruf : D";
    }


    //4.2
    echo "<br><br><b>--- STRUKTUR PERULANGAN ---</b><br>";
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
?>