<?php
    if (isset($_POST["submit"])) {
        $targetDirectory = "uploads/";  //direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

        //tambahan kode
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $maxFileSize = 5 * 1024 * 1024;
        
        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah."; "<br><br>";
                echo "<img src = '" . $targetFile . "' width = '200' alt = 'Thumbnail'>";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
?>