<?php
// Informasi koneksi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_unj";

// Melakukan koneksi ke database
$connection = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>