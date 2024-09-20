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
    echo "<br><br><b>--- STRUKTUR PERULANGAN_WHILE ---</b><br>";
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";


    //4.3
    echo "<br><br><b>--- STRUKTUR PERULANGAN_FOR ---</b><br>";
    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang akan dipanen adalah $jumlahBuah";


    //4.4
    echo "<br><br><b>--- STRUKTUR PERULANGAN_FOREACH ---</b><br>";
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah : $totalSkor";
?>