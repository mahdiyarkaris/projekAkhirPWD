<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Dessert</title>
    <link rel="stylesheet" href="ubah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
            <a class="nav-link active" href="about.php">About</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-right my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <?php if(isset($_SESSION['logged_in'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="infoakun.php"><?php echo $_SESSION['nama']; ?></a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
  <div class="bg-light text-center p-5 rounded">
    <h1 class="fw-bold">Tentang Kami</h1>
    <p>Mengenal lebih dekat Sweet Story — toko kue rumahan penuh cinta</p>
  </div>
</div>

<div class="container mt-5">
  <div class="row align-items-start">

    <div class="col-md-6">
      <img src="abt.jpeg" class="img-fluid gambar-about">
    </div>
    <div class="col-md-6">
      <h1><b>Cerita Kami</b></h1>
      <hr>
      <p>Sweet Story lahir dari kecintaan kami terhadap dunia pastry dan keinginan untuk berbagi kebahagiaan lewat setiap gigitan. Kami percaya bahwa dessert bukan sekadar makanan penutup — ia adalah cara kami menyampaikan rasa sayang kepada setiap pelanggan.</p>
      <p>Setiap produk kami dibuat dengan bahan-bahan pilihan berkualitas tinggi, tanpa kompromi dalam hal rasa maupun tampilan. Mulai dari cupcake yang lembut, pudding yang segar, hingga cake yang elegan — semua hadir untuk memanjakan lidah kamu.</p>
      <p>Kami terus berinovasi menghadirkan menu-menu baru yang mengikuti selera zaman, namun tetap mempertahankan kualitas dan cita rasa yang sudah dipercaya oleh ribuan pelanggan kami. Kepuasan kamu adalah prioritas utama kami.</p>
      <p>Bergabunglah bersama komunitas pecinta dessert kami dan rasakan sendiri pengalaman manis yang tak terlupakan. Karena bagi kami, setiap gigitan adalah momen kebahagiaan yang ingin kami ciptakan untuk kamu.</p>
    </div>
  </div>
</div>

  <div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Mengapa Pilih Kami?</h2>
    <div class="row g-4 text-center">

      <div class="col-md-4">
        <div class="card h-100 p-3">
          <div class="card-body">
            <img src="ab2.jpeg" class="gambar-card">
            <h5 class="card-title">Bahan Berkualitas</h5>
            <p class="card-text">Semua produk dibuat dari bahan-bahan segar pilihan tanpa pengawet.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 p-3">
          <div class="card-body">
            <img src="ab3.jpeg" class="gambar-card">
            <h5 class="card-title">Dibuat dengan Cinta</h5>
            <p class="card-text">Setiap produk dibuat secara homemade dengan penuh perhatian dan cinta.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 p-3">
          <div class="card-body">
            <img src="ab1.jpeg" class="gambar-card">
            <h5 class="card-title">Harga Terjangkau</h5>
            <p class="card-text">Menikmati dessert enak dan berkualitas tidak harus mahal.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
  <div class="row align-items-start">
    <div class="col-md-6">
      <h1><b>Toko Kami</b></h1>
      <hr>
      <p><b>Babarsari</b></p>
      <p>Jl. Babarsari No. 2, Tambak Bayan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281.</p>
      <hr>
      <p>Buka dari 09.00 - 20.00</p>
      <p>0862527141619</p>
      <hr>
      <a href="https://www.google.com/maps/place/Upn+Veteran+Yogyakarta+Kampus,+Janti,+Caturtunggal,+Kec.+Depok,+Kabupaten+Sleman,+Daerah+Istimewa+Yogyakarta+55281/@-7.7823161,110.4134746,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a59f06c72b2f5:0xd4a4e0d9963c5e9c!8m2!3d-7.7823214!4d110.4160495!16s%2Fg%2F11qh31bsy6?entry=ttu&g_ep=EgoyMDI2MDQyOS4wIKXMDSoASAFQAw%3D%3D" class="menu-btn">Lokasi</a>
    </div>
    <div class="col-md-6">
      <img src="abt2.jpg" class="img-fluid gambar-about">
    </div>
  </div>
</div>

  <footer class="footer">
    <div class="container text-center">
        <p>&copy; 2026 Sweet Story. All rights reserved.</p>
    </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>