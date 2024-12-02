<?php
    if (isset($_POST["submit"])) {
        $targetDirectory = "documents/";  //direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);

        //tambahan kode
        $documentsFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedExtensions = array("txt", "pdf", "doc", "docx");
        $maxFileSize = 10 * 1024 * 1024;
        
        if (in_array($documentsFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
                echo "Dokumen berhasil diunggah.";
                // echo "<img src = '" . $targetFile . "' width = '200' alt = 'Thumbnail'>";
            } else {
                echo "Gagal mengunggah dokumen.";
            }
        } else {
            echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    }
?>