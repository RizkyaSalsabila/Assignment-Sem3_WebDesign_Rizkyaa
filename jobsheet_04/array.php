<?php
    //5.1
    echo "<b>--- Penerapan Array Siswa ---</b><br>";
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

    $nilaiLulus = [];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            $nilaiLulus[] = $nilai;
        }
    }

    echo "Daftar nilai siswa yang lulus : " . implode(', ', $nilaiLulus);


    //5.2
    echo "<br><br><b>--- Penerapan Array Karyawan ---</b><br>";
    $daftarKaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Charlie', 9],
        ['David', 5],
        ['Eva', 6],
    ];

    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarKaryawan as $karyawan) {
        if ($karyawan[1] > 5) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }

    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(', ', $karyawanPengalamanLimaTahun);
?>