<?php
if (isset($_POST['submit'])) {
    // Target directory for file uploads (ensure it exists and has proper permissions)
    $targetDirectory = "upload_peta_konsep/";
    
    // Full path to the target file
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);
    
    // Variable to track whether the upload is okay or not
    $uploadOk = 1;
    
    // Get the file type (extension) of the uploaded file
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "File sudah ada.";
        $uploadOk = 0;
    }

    // Check file size (5 MB limit)
    if ($_FILES["file"]["size"] > 5242880) { // 5 MB (in bytes)
        echo "File terlalu besar.";
        $uploadOk = 0;
    }

    // Define allowed file types (extensions)
    $allowed_image_types = array("jpeg", "jpg", "png", "gif");
    $allowed_pdf_types = array("pdf");
    $allowed_file_types = array_merge($allowed_image_types, $allowed_pdf_types);

    // Get the actual file extension
    $file_extension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

    // Check if the file type is allowed
    if (!in_array($file_extension, $allowed_file_types)) {
        echo "Hanya file PDF, DOC, dan DOCX yang diperbolehkan.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "File tidak dapat diunggah.";
    } else {
        // Try to upload the file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "File " . htmlspecialchars(basename($_FILES["file"]["name"])) . " berhasil diunggah.";
        } else {
            echo "Terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
