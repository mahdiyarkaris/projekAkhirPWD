<?php
session_start();
include 'koneksi.php';
 
if(!isset($_SESSION['logged_in']) || $_SESSION['role'] !== 'admin'){
    header('location: login.php');
    exit();
}
 
$id = $_GET['id'];
$status = $_GET['status'];
 
mysqli_query($koneksi, "UPDATE pesanan SET status='$status' WHERE id_pesanan='$id'");
 
header('location: admin.php?pesan=sukses_update');
exit();
?>