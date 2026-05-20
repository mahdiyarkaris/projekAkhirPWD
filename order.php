<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['id'])){
    header('location: login.php');
    exit();
}

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
    header('location: admin.php');
    exit();
}

$nama = $_GET['nama'];
$harga = $_GET['harga'];
$gambar = $_GET['gambar'];
$keterangan = $_GET['keterangan'];
?>

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
    </div>
  </div>
</nav>

<div class="isi-halaman">
  <div class="container mt-5">
    <div class="row align-items-start">

      <div class="col-md-6 text-center">
        <img src="<?php echo $gambar; ?>" class="img-fluid gambar-order">
        <div class="alert alert-warning mt-3">
          Belanja di atas Rp 50.000 dapat diskon Rp 5.000!
        </div>
      </div>

      <div class="col-md-6 mt-3">
        <h2><?php echo $nama; ?></h2>
        <h4 class="text-danger">Rp <?php echo $harga; ?></h4>
        <p><?php echo $keterangan; ?></p>
        <hr>

        <?php
        $berhasil = false;
        $gagal = false;

        if(isset($_POST['jumlah'])){
          $jumlah = $_POST['jumlah'];
          $metode = $_POST['metode'];
          $total = $harga * $jumlah;

          $diskon = 0;
          if($total > 50000){
            $diskon = 5000;
          }

          $bayar = $total - $diskon;
          $id_user = $_SESSION['id'];
          $tanggal = date('Y-m-d');

          $simpan = mysqli_query($koneksi, "INSERT INTO pesanan (user_id, nama_produk, harga_satuan, jumlah, total, diskon, total_bayar, metode_bayar, tanggal, status) VALUES ('$id_user', '$nama', '$harga', '$jumlah', '$total', '$diskon', '$bayar', '$metode', '$tanggal', 'pending')");

          if($simpan){
            $berhasil = true;
          } else {
            $gagal = true;
          }
        }
        ?>

        <?php if($berhasil){ ?>
          <div class="alert alert-success">
            Pesanan berhasil dibuat!
          </div>
          <div class="card p-3 mb-3">
            <p class="mb-1">Jumlah Pesan: <b><?php echo $jumlah; ?></b></p>
            <p class="mb-1">Metode Bayar: <b><?php echo $metode; ?></b></p>
            <p class="mb-0">Total Bayar: <b class="text-danger">Rp <?php echo $bayar; ?></b></p>
          </div>
          <button type="button" class="menu-btn" data-bs-toggle="modal" data-bs-target="#modalStruk">
            Lihat Struk
          </button>
          <a href="riwayat.php" class="menu-btn mt-2">Lihat Pesanan Saya</a>

        <?php } elseif($gagal){ ?>
          <div class="alert alert-danger">
            Pesanan gagal! Silakan coba lagi.
          </div>
          <a href="order.php?nama=<?php echo $nama; ?>&harga=<?php echo $harga; ?>&gambar=<?php echo $gambar; ?>&keterangan=<?php echo $keterangan; ?>" class="menu-btn">Coba Lagi</a>

        <?php } else { ?>
          <form method="post">
            <label class="fw-bold mb-1">Jumlah Pesan</label><br>
            <input type="number" name="jumlah" class="form-control w-25 mb-3" min="1" required>

            <label class="fw-bold mb-1">Metode Pembayaran</label><br>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="metode" id="transfer" value="Transfer Bank" required>
              <label class="form-check-label" for="transfer">Transfer Bank</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="metode" id="qris" value="QRIS">
              <label class="form-check-label" for="qris">QRIS</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="metode" id="e-wallet" value="E-Wallet">
              <label class="form-check-label" for="e-wallet">E-Wallet</label>
            </div>

            <button type="submit" class="menu-btn">Pesan</button>
          </form>
        <?php } ?>

      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="container text-center">
    <p>&copy; 2026 Sweet Story. All rights reserved.</p>
  </div>
</footer>

<?php if($berhasil){ ?>
<div class="modal fade" id="modalStruk" tabindex="-1" aria-labelledby="labelStruk" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelStruk">Struk Pesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
          <tr>
            <td>Produk</td>
            <td><b><?php echo $nama; ?></b></td>
          </tr>
          <tr>
            <td>Harga Satuan</td>
            <td>Rp <?php echo $harga; ?></td>
          </tr>
          <tr>
            <td>Jumlah</td>
            <td><?php echo $jumlah; ?></td>
          </tr>
          <tr>
            <td>Metode Bayar</td>
            <td><?php echo $metode; ?></td>
          </tr>
          <tr>
            <td>Total</td>
            <td>Rp <?php echo $total; ?></td>
          </tr>
          <tr>
            <td>Diskon</td>
            <td><b class="text-danger">- Rp <?php echo $diskon; ?></b></td>
          </tr>
          <tr>
            <td><b>Total Bayar</b></td>
            <td><b>Rp <?php echo $bayar; ?></b></td>
          </tr>
        </table>
        <?php if($diskon > 0){ ?>
          <div class="alert alert-warning">
            Kamu dapat diskon Rp 5.000 karena belanja di atas Rp 50.000!
          </div>
        <?php } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="menu-btn" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>