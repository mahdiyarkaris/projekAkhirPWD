<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['logged_in'])) {
    header('location: login.php');
    exit();
}

$id_user = $_SESSION['id'];
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
      <a class="navbar-brand" href="home.php">Sweet Story</a>
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
              <a class="nav-link" href="admin.php">Dashboard</a>
            </li>
          <?php else: ?>      
            <li class="nav-item">
              <a class="nav-link" href="riwayat.php">Riwayat Pesanan</a>
            </li>        
          <?php endif; ?>       
          <li class="nav-item">
            <a class="nav-link" href="infoakun.php">
              <?php echo $_SESSION['nama']; ?>
            </a>
          </li>     
        </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="info-akun">
          <p>Selamat datang kembali!</p>
          <h3>Halo, <?php echo $_SESSION['nama']; ?>!</h3>
          <p><?php echo $_SESSION['email']; ?></p>
      </div>
    </div>
  </div>
</div>

<section class="section-informasi">
  <div class="container mt-4 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card-info-akun">
        <p clas="judul-info-akun">Informasi Akun</p>
        <table class="table">
        <tbody>
          <tr>
              <td class="nama-info">Nama</td>
              <td class="text-end value-akun"><?php echo $_SESSION['nama']; ?></td>
          </tr>
          <tr>
              <td class="nama-info">Email</td>
              <td class="text-end value-akun"><?php echo $_SESSION['email']; ?></td>
          </tr>
          <tr>
              <td class="nama-info">No. HP</td>
              <td class="text-end value-akun"><?php echo $_SESSION['no_hp']; ?></td>
          </tr>
          <tr>
              <td class="nama-info">Alamat</td>
              <td class="text-end value-akun"><?php echo $_SESSION['alamat']; ?></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>

    </div>
  </div>
</section>

<section class="pilihan">
  <a href="menu.php" class="btn btn-lihatmenu">Lihat Menu</a>
  <a href="logout.php" class="btn btn-logout">Logout</a>
</section> 

    
    

<footer class="footer">
    <div class="container text-center">
        <p>&copy; 2026 Sweet Story. All rights reserved.</p>
    </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>