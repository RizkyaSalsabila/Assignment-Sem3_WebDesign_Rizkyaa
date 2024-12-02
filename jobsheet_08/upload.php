<?php
    if (isset($_POST["submit"])) {
        $targetDirectory = "uploads/";  //direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    }
?>