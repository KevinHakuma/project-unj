<?php
include 'components/connect.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedFakultas = $_POST['fakultas'];

    $resultProdi = mysqli_query($connection, "SELECT * FROM prodi WHERE fakultas_id = '$selectedFakultas'");
    while ($rowProdi = mysqli_fetch_assoc($resultProdi)) {
        echo "<option value='" . $rowProdi['prodi_id'] . "'>" . $rowProdi['nama_prodi'] . "</option>";
    }
} else {
    echo '<option value="" disabled selected>Select Prodi</option>';
}

?>
