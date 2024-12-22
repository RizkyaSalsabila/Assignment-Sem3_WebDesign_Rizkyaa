<!DOCTYPE HTML>
<html>
    <head>
        <title>Data Anggota</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Data Anggota</h2>
            <a href="create.php" class="btn-tambah">Tambah Anggota</a>
            <?php
                include('koneksi.php');

                $query = "SELECT * FROM anggota ORDER BY id DESC";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    echo "<table>";
                    echo "<tr>";
                        echo "<th>No</th>";
                        echo "<th>Nama</th>";
                        echo "<th>Jenis Kelamin</th>";
                        echo "<th>Alamat</th>";
                        echo "<th>No. Telp</th>";
                        echo "<th>Aksi</th>";
                    echo "</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        $kelamin = ($row["jenis_kelamin"] === 'L' )? 'Laki-laki':'Perempuan';
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $kelamin . "</td>
                            <td>" . $row["alamat"] . "</td>
                            <td>" . $row["no_telp"] . "</td>
                            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> |
                                <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . $row["nama"] . "\")'>Hapus</a></td>
                                </tr>";
                    }
                    echo "</table>";       
                } else {
                    echo "Tidak ada data.";
                }

                mysqli_close($connect);
            ?>
        </div>
        <script>
                function konfirmasiHapus(id, nama) {
                    var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data dengan Nama " + nama + "?");
                    if (konfirmasi) {
                        window.location.href = "proses.php?aksi=hapus&id=" + id; 
                    }
                }
        </script>
    </body>
</html>