<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoOrtographic.webp" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/logoOrtographic.webp" type="image/x-icon">
  <title>Ortographic - Donde las letras se vuelven tu juego.</title>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">ORTOGRAPHIC</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" style="color: white; font-size: 20px;" id="salir" href>Salir</a></li>

          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="services ">

    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <div class="container progreso mb-5" data-aos="fade-up">
          <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 1%"></div>
          </div>
        </div>
        <h5 id="contador"> </h5>
        <h2 id="mostrar-reactivo"></h2>

      </div>

      <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-12 col-md-12 col-lg-3 centrado mb-5 mb-lg-0" data-aos="zoom-in">
          <div class="icon-box icon-box-pink" id="card1">
            <div class="icon"><i class="bi bi-dice-1"></i></div>
            <h4 class="title"><a id="op1"></a></h4>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 centrado mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box icon-box-cyan" id="card2">
            <div class="icon"><i class="bi bi-dice-2"></i></div>
            <h4 class="title"><a id="op2"></a></h4>
          </div>
        </div>


        <div class="col-md-6 col-lg-3 centrado mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box icon-box-blue" id="card3">
            <div class="icon"><i class="bi bi-dice-3"></i></div>
            <h4 class="title"><a id="op3"></a></h4>
          </div>
        </div>
        <div class="col-1"></div>


      </div>

    </div>

  </section><!-- End Hero -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  <script src="assets/js/jugar.js"></script>
  <script src="assets/js/jugar2.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>