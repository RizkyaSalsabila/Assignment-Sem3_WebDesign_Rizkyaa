<?php
    //4.6
    echo "<b>Soal cerita : </b> Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
    Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang 
    akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. 
    Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br>";
    echo "<b><br>Penyelesaian : </b><br>";

    //Nilai sebelum di sort
    $daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    //Konstanta
    showArray ("Daftar Nilai Keseluruhan : <br>", $daftarNilai);

    //Nilai setelah di sort
    sort($daftarNilai);
    showArray ("<br>Daftar Nilai setelah di urutkan (DESC) : <br>", $daftarNilai);

   //Membuat variabel
    $totalNilai = 0;
    $rataRata = 0;

    //Looping dengan mengabaikan 2 nilai tertinggi dan 2 nilai terendah
    for ($i = 2; $i < count($daftarNilai) - 2; $i++) {
        $totalNilai += $daftarNilai[$i];        //menghitung total nilai
    }

    echo "<br>Total nilai (mengabaikan 2 nilai tertinggi dan 2 terendah) : <b>$totalNilai </b><br>";

    //Menghitung rata rata
    $rataRata = $totalNilai / (count($daftarNilai) - 4);
    echo "<br>Rata - rata nilai (mengabaikan 2 nilai tertinggi dan 2 terendah) : <b>$rataRata</b><br>";

     //pembuatan fungsi showArray
     function showArray($judul, $array){
        echo $judul;
        echo "{ ";
        foreach ($array as $daftarNilai) {
            echo "$daftarNilai ";
        }
        echo "} <br>";
    }
?>