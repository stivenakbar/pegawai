<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fleur Company - Solusi Inovatif</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.html">Fleur Company Solusi IT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header id="home" class="py-5">
  <div class="container text-center">
    <ul></ul>
    <h1>Selamat Datang di Fleur Company</h1>
    <p class="lead">Mitra terpercaya di bidang teknologi dengan solusi inovatif untuk kebutuhan bisnis Anda.</p>
    <a href="#about" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
  </div>
</header>

<section id="about" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Tentang Fleur Company</h2>
        <p class="lead">Di Fleur Company, kami berkomitmen untuk menghadirkan teknologi terkini dalam setiap solusi kami.</p>
        <p>Berdiri sejak tahun 2020, misi kami adalah memberikan keunggulan melalui inovasi yang berkelanjutan.</p>
      </div>
      <div class="col-lg-6">
        <img src="img/perusahaan (2).png" alt="Tentang XYZ Company">
      </div>
    </div>
  </div>
</section>

<section id="services" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center">Layanan Kami</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="card border-0 mb-4 shadow-sm">
          <div class="card-body">
            <i class="fas fa-laptop fa-3x mb-3"></i>
            <h3 class="card-title">Pengembangan Web</h3>
            <p class="card-text">Dari konsep hingga peluncuran, kami membangun aplikasi web yang skalabel dan aman.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 mb-4 shadow-sm">
          <div class="card-body">
            <i class="fas fa-mobile-alt fa-3x mb-3"></i>
            <h3 class="card-title">Pengembangan Aplikasi Mobile</h3>
            <p class="card-text">Ciptakan pengalaman mobile yang menarik di platform iOS dan Android.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 mb-4 shadow-sm">
          <div class="card-body">
            <i class="fas fa-cloud fa-3x mb-3"></i>
            <h3 class="card-title">Solusi Cloud</h3>
            <p class="card-text">Optimalkan operasional Anda dengan infrastruktur dan layanan cloud yang tangguh.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Hubungi Kami</h2>
    <div class="row">
      <div class="col-md-6">
        <h3>Informasi Kontak</h3>
        <p><strong>Alamat:</strong> Jl. Adi Sumarmo No. 12, Karanganyar, Indonesia</p>
        <p><strong>Email:</strong> fleurcompany@gmail.com</p>
        <p><strong>Telepon:</strong> 085865803536</p>
      </div>
      <div class="col-md-6">
        <h3>Jangan Ragu Menghubungi Kami</h3>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Anda" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Anda" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p>&copy; 2024 Fleur Company. Hak cipta dilindungi undang-undang.</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>

<script>
  // Smooth scrolling menggunakan easing jQuery
  $('a.nav-link').on('click', function(event) {
    if (this.hash !== '') {
      event.preventDefault();
      const hash = this.hash;
      $('html, body').animate(
        {
          scrollTop: $(hash).offset().top
        },
        800,
        function() {
          window.location.hash = hash;
        }
      );
    }
  });
</script>

</body>
</html>
