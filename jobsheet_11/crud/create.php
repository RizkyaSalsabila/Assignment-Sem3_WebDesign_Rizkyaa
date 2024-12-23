<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Anggota</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h2>Tambah Data Anggota</h2>
            <form action="proses.php?aksi=tambah" method="POST">
                <div class='form-group'>
                    <label for="nama">Nama : </label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class='form-group mt-3'>
                    <label for="jenis_kelamin">Jenis Kelamin : </label>
                    <div class='form-check'>
                        <input type="radio" class='form-check-input' name="jenis_kelamin" value="L" id="laki" required>
                        <label class='form-check-label' for="laki">Laki-laki</label>
                    </div>
                    <div class='form-check'>
                        <input type="radio" class='form-check-input' name="jenis_kelamin" value="P" id="perempuan" required>
                        <label class='form-check-label' for="perempuan">Perempuan</label>
                    </div> 
                </div>
                <div class='form-group mt-3'>
                    <label for="alamat">Alamat : </label>
                    <input type="text" class='form-control' name="alamat" id="alamat" required>
                </div>
                <div class='form-group mt-3'>
                    <label for="no_telp">No. Telp : </label>
                    <input type="text" class='form-control' name="no_telp" id="no_telp" required>
                </div> 
                <button type="submit" class='btn btn-primary mt-5'>Simpan Data</button>
            </form>
                
            <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>