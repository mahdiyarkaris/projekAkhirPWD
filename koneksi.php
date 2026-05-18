<?php
$hostname = "localhost";
$nama = "root";
$password = "";
$database = "projectakhirpwd";

$koneksi = new mysqli($hostname, $nama, $password, $database);
if ($koneksi->connect_error) {
    die('Koneksi gagal: ' . $koneksi->connect_error);
}
?> 