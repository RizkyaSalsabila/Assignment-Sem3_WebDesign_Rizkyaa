<?php
    echo "<b>Soal Cerita :</b> Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan.<br>
    Berapa persen kursi yang masih kosong di restoran tersebut?<br><br>";
    echo "<b>Penyelesaian : </b><br>";

    //konstanta
    define("JUMLAH_KURSI", 45);

    //deklarasi total kursi keseluruhan
    $totalKursi =  JUMLAH_KURSI;
    echo "Jumlah kursi keseluruhan : $totalKursi<br>";

    //deklarasi total kursi ditempati
    $kursi_ditempati = 28;
    echo "Jumlah kursi yang ditempati : $kursi_ditempati<br>";

    //penghitungan dan persentase kursi yang kosong
    $totalKursi -= $kursi_ditempati;
    $persentaseKursiKosong = ($totalKursi / JUMLAH_KURSI) * 100;
    echo "Jadi, persentase kursi kosong pada restoran adalah $persentaseKursiKosong %" 
?>