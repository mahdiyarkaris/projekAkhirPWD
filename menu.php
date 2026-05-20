<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
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
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="menu.php">Menu</a>
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
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="card text-bg-dark border-0">
        <img src="menuu.jpeg" class="card-img-top" alt="menu">
        <div class="card-img-overlay text-center">
            <h3 class="card-title mt-5 pt-5 fw-bold">Our Menu</h3>
            <p class="card-text">Silahkan pilih menu</p>
        </div>
    </div>
  </div>

  <div class="container mt-4">
  <h2 class="text-center mb-4 judul-kategori">Cupcake</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="cup1.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Vanilla Cream Cupcake</h5>
          <p class="fw-bold text-danger">Rp 18.000</p>
          <p>Cupcake vanilla dengan buttercream halus dan hiasan daun thyme.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Vanilla Cream Cupcake&harga=18000&gambar=cup1.jpeg&keterangan=Cupcake vanilla dengan buttercream halus dan hiasan daun thyme." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="cup2.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Cherry Topped Cupcake</h5>
          <p class="fw-bold text-danger">Rp 20.000</p>
          <p>Cupcake vanilla lembut dengan topping cream manis dan cherry segar.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Cherry Topped Cupcake&harga=20000&gambar=cup2.jpeg&keterangan=Cupcake vanilla lembut dengan topping cream manis dan cherry segar." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="cup3.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Sweet Sprinkle Cupcake</h5>
          <p class="fw-bold text-danger">Rp 17.000</p>
          <p>Cupcake lembut dengan buttercream creamy dan topping strawberry crumble.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Sweet Sprinkle Cupcake&harga=17000&gambar=cup3.jpeg&keterangan=Cupcake lembut dengan buttercream creamy dan topping strawberry crumble." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <h2 class="text-center mb-4 judul-kategori">Pudding</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="puding1.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Classic Caramel Pudding</h5>
          <p class="fw-bold text-danger">Rp 25.000</p>
          <p>Puding susu lembut dengan saus karamel yang manis.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Classic Caramel Pudding&harga=25000&gambar=puding1.jpeg&keterangan=Puding susu lembut dengan saus karamel yang manis." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="puding2.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Strawberry Milk Pudding</h5>
          <p class="fw-bold text-danger">Rp 28.000</p>
          <p>Puding susu dengan topping saus strawberry segar, creamy dan ringan.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Strawberry Milk Pudding&harga=28000&gambar=puding2.jpeg&keterangan=Puding susu dengan topping saus strawberry segar, creamy dan ringan." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="puding3.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Banana Caramel Pudding</h5>
          <p class="fw-bold text-danger">Rp 30.000</p>
          <p>Puding lembut dengan tambahan pisang dan karamel, manis dan legit.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Banana Caramel Pudding&harga=30000&gambar=puding3.jpeg&keterangan=Puding lembut dengan tambahan pisang dan karamel, manis dan legit." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <h2 class="text-center mb-4 judul-kategori">Cake</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="cake1.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Fresh Peach Cake</h5>
          <p class="fw-bold text-danger">Rp 45.000</p>
          <p>Cake lembut dengan topping buah peach segar yang manis dan juicy.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Fresh Peach Cake&harga=45000&gambar=cake1.jpeg&keterangan=Cake lembut dengan topping buah peach segar yang manis dan juicy." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="cake2.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Fruit Cheesecake Slice</h5>
          <p class="fw-bold text-danger">Rp 48.000</p>
          <p>Cheesecake lembut dengan topping buah segar dan creamy.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Fruit Cheesecake Slice&harga=48000&gambar=cake2.jpeg&keterangan=Cheesecake lembut dengan topping buah segar dan creamy." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="cake3.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Lemon Soft Cake</h5>
          <p class="fw-bold text-danger">Rp 43.000</p>
          <p>Cake lembut dengan rasa lemon segar, kombinasi manis dan sedikit asam.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Lemon Soft Cake&harga=43000&gambar=cake3.jpeg&keterangan=Cake lembut dengan rasa lemon segar, kombinasi manis dan sedikit asam." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
  <h2 class="text-center mb-4 judul-kategori">Ice Cream</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="ice2.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Oreo Berry Ice Cream</h5>
          <p class="fw-bold text-danger">Rp 25.000</p>
          <p>Ice cream creamy dengan topping oreo crumble dan buah berry segar yang manis dan dingin.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Oreo Berry Ice Cream&harga=32000&gambar=ice2.jpeg&keterangan=Ice cream creamy dengan topping oreo crumble dan buah berry segar yang manis dan dingin." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="ice1.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Lotus Banana Dessert</h5>
          <p class="fw-bold text-danger">Rp 30.000</p>
          <p>Dessert creamy dengan potongan pisang, whipped cream, dan topping lotus biscoff yang manis legit.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Lotus Banana Dessert&harga=30000&gambar=ice1.jpeg&keterangan=Dessert creamy dengan potongan pisang, whipped cream, dan topping lotus biscoff yang manis legit." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="ice3.jpeg" class="card-img-top">
        <div class="card-body text-center">
          <h5 class="card-title">Matcha Vanilla Sundae</h5>
          <p class="fw-bold text-danger">Rp 28.000</p>
          <p>Perpaduan ice cream vanilla dan matcha creamy dengan topping kacang almond yang crunchy.</p>
          <?php if(isset($_SESSION['id'])){ ?>
            <a href="order.php?nama=Matcha Vanilla Sundae&harga=28000&gambar=ice3.jpeg&keterangan=Perpaduan ice cream vanilla dan matcha creamy dengan topping kacang almond yang crunchy." class="menu-btn">Beli</a>
          <?php } else { ?>
            <a href="login.php" class="menu-btn">Beli</a>
          <?php } ?>
        </div>
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