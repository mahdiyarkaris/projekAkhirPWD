<?php
session_start();
include 'koneksi.php';
 
if(!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin'){
    header('location: login.php');
    exit();
}
 
$id = $_GET['id'];
 
mysqli_query($koneksi, "DELETE FROM pesanan WHERE id_pesanan='$id'");
 
header('location: admin.php?pesan=sukses_hapus');
exit();
?>