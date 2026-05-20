<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['id'])){
    header('location: login.php');
    exit();
}

$id_pesanan = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id_pesanan = '$id_pesanan' AND user_id = '{$_SESSION['id']}'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    header('location: riwayat.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dessert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="ubah.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dessert</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-right my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <?php if($_SESSION['role'] == 'admin'): ?>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="riwayat.php">Riwayat Pesanan</a>
            </li>
          <?php endif; ?>
        </ul>

      </div>
    </div>
  </nav>


<div class="isi-halaman">
  <div class="container mt-5">
    <div class="row align-items-start">
 
      <div class="col-md-6 text-center mt-3">
        <h2><?php echo $data['nama_produk']; ?></h2>
        <h4 class="text-danger">Rp <?php echo number_format($data['harga_satuan'], 0, ',', '.'); ?></h4>
        <hr>
        
        <div class="card-struk">
        <div class="card p-3">
          <p class="mb-1">Jumlah Pesan: <b><?php echo $data['jumlah']; ?></b></p>
          <p class="mb-1">Metode Bayar: <b><?php echo $data['metode_bayar']; ?></b></p>
          <p class="mb-1">Tanggal: <b><?php echo $data['tanggal']; ?></b></p>
          <p class="mb-0">Status: 
            <span class="badge <?php echo $data['status'] == 'pending' ? 'bg-warning text-dark' : 'bg-success'; ?>">
              <?php echo $data['status']; ?>
            </span>
          </p>
        </div>
      </div>
    </div>
 
      
      <div class="col-md-6 mt-3">
        <table class="table">
          <tr>
            <td>Produk</td>
            <td><b><?php echo $data['nama_produk']; ?></b></td>
          </tr>
          <tr>
            <td>Harga Satuan</td>
            <td>Rp <?php echo number_format($data['harga_satuan'], 0, ',', '.'); ?></td>
          </tr>
          <tr>
            <td>Jumlah</td>
            <td><?php echo $data['jumlah']; ?></td>
          </tr>
          <tr>
            <td>Metode Bayar</td>
            <td><?php echo $data['metode_bayar']; ?></td>
          </tr>
          <tr>
            <td>Total</td>
            <td>Rp <?php echo number_format($data['total'], 0, ',', '.'); ?></td>
          </tr>
          <tr>
            <td>Diskon</td>
            <td><b class="text-danger">- Rp <?php echo number_format($data['diskon'], 0, ',', '.'); ?></b></td>
          </tr>
          <tr>
            <td><b>Total Bayar</b></td>
            <td><b>Rp <?php echo number_format($data['total_bayar'], 0, ',', '.'); ?></b></td>
          </tr>
        </table>
 
        <?php if($data['diskon'] > 0){ ?>
          <div class="alert alert-warning">
            Kamu dapat diskon Rp 5.000 karena belanja di atas Rp 50.000!
          </div>
        <?php } ?>
 
        <a href="riwayat.php" class="menu-btn mt-2">Kembali</a>
      </div>
 
    </div>
  </div>
</div>
 
<footer class="footer">
  <div class="container text-center">
    <p>&copy; 2026 Dessert. All rights reserved.</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
  