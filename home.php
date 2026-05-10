<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dessert</title>
    <link rel="stylesheet" href="ubahvera.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
            <a class="nav-link active" href="home1.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu1.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-right my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <?php if(isset($_SESSION['logged_in'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php"><?php echo $_SESSION['nama']; ?></a>
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
        <img src="home2.jpg" class="d-block w-100" alt="home2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Pudding</h5>
          <p>Dibuat dari bahan pilihan dengan tekstur ekstra halus dan creamy yang lumer di mulut.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="home3.jpeg" class="d-block w-100" alt="home3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Cake</h5>
          <p>Dipanggang fresh setiap hari dengan tekstur super lembut dan rasa yang rich di setiap lapisan.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="home4.png" class="d-block w-100" alt="home4">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>