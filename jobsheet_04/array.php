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


    //5.3
    echo "<br><br><b>--- Penerapan Array Nilai ---</b><br>";
    $daftarNilai = [
        'Matematika' => [
            ['Alice', 85],
            ['Bob', 92],
            ['Charlie', 78],
        ],
        'Fisika' => [
            ['Alice', 90],
            ['Bob', 88],
            ['Charlie', 75],
        ],
        'Kimia' => [
            ['Alice', 92],
            ['Bob', 80],
            ['Charlie', 85],
        ]
    ];

    $mataKuliah = 'Fisika';
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";

    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
    }


    //5.4
    echo "<b><br><br>--- STUDI KASUS ARRAY 2 DIMENSI ---</b><br>";
    echo "<b>Soal cerita : </b> Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. Guru tersebut memiliki 
    data setiap siswa terdiri dari nama dan nilai. Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas 
    rata-rata kelas. Dengan ketentuan nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, 
    Eva dapat 90 <br>";
    echo "<b><br>Penyelesaian : </b><br>";

    $nilaiUjianMTK = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ];

    $totalNilai = 0;
    $jumlahSiswa = count($nilaiUjianMTK);

    foreach ($nilaiUjianMTK as $nilaiMTK) {
        $totalNilai += $nilaiMTK[1];
    }

    $rataRataNilai = $totalNilai / $jumlahSiswa;
    echo "Rata rata nilai kelas : $rataRataNilai<br><br>";
    echo "Banyaknya siswa yang lulus di atas rata rata : <br>";

    foreach ($nilaiUjianMTK as $nilaiMTK) {
        if ($nilaiMTK[1] > $rataRataNilai) {
            echo "Nama : {$nilaiMTK[0]}, Nilai : {$nilaiMTK[1]} <br>";
        }
    }
?>