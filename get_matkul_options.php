<?php
include 'components/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menggunakan prepared statement untuk mencegah SQL injection
    $selectedProdi = $_POST['prodi'];
    $stmt = mysqli_prepare($connection, "SELECT * FROM matkul WHERE prodi_id = ?");
    mysqli_stmt_bind_param($stmt, 's', $selectedProdi);
    mysqli_stmt_execute($stmt);
    $resultMatkul = mysqli_stmt_get_result($stmt);

    if (!$resultMatkul) {
        die(mysqli_error($connection));
    }

    // Periksa apakah ada matkul yang ditemukan
    if (mysqli_num_rows($resultMatkul) > 0) {
        while ($rowMatkul = mysqli_fetch_assoc($resultMatkul)) {
            echo "<option value='" . $rowMatkul['id'] . "'>" . $rowMatkul['nama_matkul'] . "</option>";
        }
    } else {
        echo '<option value="" disabled selected>No Matkul Available</option>';
    }
    mysqli_stmt_close($stmt);
} else {
    echo '<option value="" disabled selected>Select Prodi</option>';
}

mysqli_close($connection);
?>
