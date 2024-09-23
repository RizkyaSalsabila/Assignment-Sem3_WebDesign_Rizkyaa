<?php
    //4.6
    echo "<b>--- STUDI KASUS 1 ---</b><br>";
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


    //4.7
    echo "<br><br><b>--- STUDI KASUS 2 ---</b><br>";
    echo "<b>Soal cerita : </b> Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. Toko tersebut menawarkan 
    diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu pelanggan ini untuk menghitung harga yang harus dibayar 
    setelah mendapatkan diskon. <br>";
    echo "<b><br>Penyelesaian : </b><br>";

    //harga produk
    $hargaProduk = 120000;
    echo "Harga produk pembelian barang : $hargaProduk<br><br>";

    //jumlah diskon
    $diskon = 0.2;

    //kondisi
    if ($hargaProduk > 100000) {
       $hargaProduk -= $hargaProduk * $diskon;
       echo "Selamat Anda mendapatkan diskon sebesar 20%<br>";
       echo "Total harga pembayaran Anda menjadi : Rp $hargaProduk<br>";
    } else {
        echo "Maaf, Anda tidak mendapat diskon potongan harga<br>";
        echo "Harga yang harus dibayar : Rp $hargaProduk<br>";
    }
?>