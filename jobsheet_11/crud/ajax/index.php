<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Anggota</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+I8nbxGoYRpU0yD7qJfgtAltaz5pK1NM+LKC1bh6IQvpJoePh20ySJmD+A" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

    <style>
        body {
            background: #000;
            color: #fff;
        }
        .navbar {
            background: #222;
        }
        .btn {
            background: #333;
            border: none;
        }
        .form-control {
            background: #333;
            border: none;
            color: #fff;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Data Anggota</a>
</nav>

<div class="container">
    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-md-6">
        <form method="post" class="form-data" id="form-data">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="hidden" name="id" id="id">
                <input type="text" name="nama" id="nama" class="form-control" required>
                <p class="text-danger" id="err_nama"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label><br>
                <input type="radio" name="jenis_kelamin" id="jenkel1" value="L" required> Laki-laki
                <input type="radio" name="jenis_kelamin" id="jenkel2" value="P" required> Perempuan
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control" required>
                <p class="text-danger" id="err_no_telp"></p>
            </div>
            <div class="form-group">
                <button type="submit" name="simpan" id="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuN6Dg65V+w6LXXQ1VNjEsmwQuBxxKOkE25T9LIy94cawQ6MvLT" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $('#simpan').click(function() {
    var data = $('#form-data').serialize();
    var nama = document.getElementById("nama").value;
    var jenkel1 = document.getElementById("jenkel1").value;
    var jenkel2 = document.getElementById("jenkel2").value;
    var alamat = document.getElementById("alamat").value;
    var no_telp = document.getElementById("no_telp").value;

    if (!nama) {
        document.getElementById("err_nama").innerHTML = "Nama harus diisi!";
    } else {
        document.getElementById("err_nama").innerHTML = "";
    }

    if (!alamat) {
        document.getElementById("err_alamat").innerHTML = "Alamat harus diisi!";
    } else {
        document.getElementById("err_alamat").innerHTML = "";
    }

    if (!document.getElementById("jenkel1").checked && !document.getElementById("jenkel2").checked) {
        document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin harus dipilih!";
    } else {
        document.getElementById("err_jenis_kelamin").innerHTML = "";
    }

    if (!no_telp) {
        document.getElementById("err_no_telp").innerHTML = "No Telepon harus diisi!";
    } else {
        document.getElementById("err_no_telp").innerHTML = "";
    }

    if (nama && alamat && (document.getElementById("jenkel1").checked || document.getElementById("jenkel2").checked) && no_telp) {
        $.ajax({
            type: "POST",
            url: "form_action.php",
            data: data,
            success: function(data) {
                $("#data").load("data.php");
                document.getElementById("id").value = "";
                document.getElementById("form-data").reset();
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    }
});
</script>

</body>
</html>