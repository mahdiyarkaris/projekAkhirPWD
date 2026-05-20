<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dessert</title>
    <link rel="stylesheet" href="ubah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sweet Story</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
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

<section class="home">
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="home1.jpeg" class="d-block w-100" alt="home1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Cupcake</h5>
          <p>Kelembutan cupcake dengan topping manis spesial yang dibuat dari bahan berkualitas.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="puding33.jpeg" class="d-block w-100" alt="home2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Pudding</h5>
          <p>Dibuat dari bahan pilihan dengan tekstur ekstra halus dan creamy yang lumer di mulut.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Cake11.jpeg" class="d-block w-100" alt="home3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Cake</h5>
          <p>Dipanggang fresh setiap hari dengan tekstur super lembut dan rasa yang rich di setiap lapisan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="ice33.jpeg" class="d-block w-100" alt="home4">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ice cream</h5>
          <p>Diracik dengan rasa autentik dan sensasi dingin yang segar, cocok untuk setiap suasana.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section class="about">
  <div class="container text-center">
    <h1>Our Story</h1>
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="bg.jpg" alt="dapur">
    </div>
    <div class="col-md-6">
      <p>Sejak 2018, kami menghadirkan pengalaman dessert yang tidak hanya lezat, tetapi juga berkesan. Dengan perpaduan bahan berkualitas, resep pilihan, dan sentuhan kreativitas, setiap produk kami dibuat untuk memberikan kepuasan terbaik. Kepercayaan pelanggan selama bertahun-tahun menjadi bukti komitmen kami dalam menjaga kualitas dan menghadirkan yang terbaik di setiap sajian.</p>
      <a href="about.php" class="btn btn-custom">About Us</a>
    </div>
  </div>
</div>
</section>

<section class="best">
  <h1>Best Seller</h1>
  <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card shadow">
      <img src="cup3.jpeg" class="card-img-top" alt="cup3">
      <div class="card-body">
        <h5 class="card-title">Sweet Sprinkle Cupcake</h5>
        <p class="card-text">Cupcake lembut dengan buttercream creamy dan topping strawberry crumble.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow">
      <img src="puding1.jpeg" class="card-img-top" alt="puding1">
      <div class="card-body">
        <h5 class="card-title">Classic Caramel Pudding</h5>
        <p class="card-text">Puding susu lembut dengan saus karamel yang manis.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow">
      <img src="cake2.jpeg" class="card-img-top" alt="cake2">
      <div class="card-body">
        <h5 class="card-title">Fruit Cheesecake Slice</h5>
        <p class="card-text">Cheesecake lembut dengan topping buah segar dan creamy.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card shadow">
      <img src="ice1.jpeg" class="card-img-top" alt="ice1">
      <div class="card-body">
        <h5 class="card-title">Lotus Banana Dessert</h5>
        <p class="card-text">Dessert creamy dengan potongan pisang, whipped cream, dan topping lotus biscoff yang manis legit.</p>
      </div>
    </div>
  </div>
</div>
</section>

<section class="button-menu">
  <a href="menu.php" class="btn btn-custom">Explore menu</a>
</section>

<footer class="footer">
    <div class="container text-center">
        <p>&copy; 2026 Sweet Story. All rights reserved.</p>
    </div>
</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>