<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';

                $sql = "SELECT * FROM anggota ORDER BY id DESC";
                $stmt = $koneksi->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . ($row["jenis_kelamin"] == 'L' ? 'Laki-laki' : 'Perempuan') . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>" . $row["no_telp"] . "</td>";
                        echo "<td>";
                        echo "<button type='button' class='btn btn-success btn-sm edit' data-id='" . $row["id"] . "'>Edit</button>";
                        echo "<button type='button' class='btn btn-danger btn-sm hapus' data-id='" . $row["id"] . "'>Hapus</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        <script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});

function reset() {
    document.getElementById("err_nama").innerHTML = "";
    document.getElementById("err_jenis_kelamin").innerHTML = "";
    document.getElementById("err_alamat").innerHTML = "";
    document.getElementById("err_no_telp").innerHTML = "";
}

$(document).on('click', '.edit_data', function() {
    $('html, body').animate({ scrollTop: 0 }, 'slow');

    var id = $(this).attr('id');

    $.ajax({
        type: "POST",
        url: "get_data.php",
        data: {id:id},
        dataType: "json",
        success: function(response) {
            reset();
            $('html, body').animate({ scrollTop: 30 }, 'slow');
            document.getElementById("id").value = response.id;
            document.getElementById("nama").value = response.nama;
            document.getElementById("alamat").value = response.alamat;
            document.getElementById("no_telp").value = response.no_telp;
            if (response.jenis_kelamin == "L") {
                document.getElementById("jenkel1").checked = true;
            } else {
                document.getElementById("jenkel2").checked = true;
            }
        },
        error: function(response) {
            console.log(response.responseText);
        }
    });
});
</script>
        </script>
    </body>
</html>
