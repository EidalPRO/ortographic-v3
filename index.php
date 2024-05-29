<h6?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ortographic - Donde las letras se vuelven tu juego.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/miPerfil.css">
  <link rel="stylesheet" href="assets/css/modal.css">
  <link rel="shortcut icon" href="assets/img/logoOrtographic.webp" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logoOrtographic.webp" alt="Logro de Ortographic"> -->
        <h1 class="sitename">Ortographic</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="">Inicio</a></li>
          <li><a href="#acerca">Acerca de</a></li>
          <li><a href="#manual">Manuales</a></li>
          <li><a href="#galeria">Galeria de imagenes</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="#creditos">Creditos</a></li>
          <?php
          if (isset($_SESSION['usuario'])) {
            echo '<li><a type="button"  data-bs-toggle="modal" data-bs-target="#MiPerfil" style="color:white;">Mi Perfil</a></li>';
          } else {
            echo '<li><a href="inicio_sesion.php">Iniciar sesión</a></li>';
          }

          if (!isset($_SESSION['usuario'])) {
            echo '<li><a href="inicio_sesion.php">Registrarse</a></li>';
          } else {
            echo '<li><a href="bd/cerrar_sesion.php"">Cerrar sesión</a></li>';
          }
          ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <!-- <a class="btn-getstarted" href="#about">Iniciar sesión</a> -->



    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="">Ortographic</h1>
            <p class="">Donde las letras se vuelven tu juego.</p>
            <div class="d-flex">
              <a href="#practicar" class="btn-get-started">Empezar a practicar</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/lander.webp" class="img-fluid animated" alt="Ortographic Lander">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="acerca" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Acerca de Ortographic</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              En la última actialización se agrego.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Mas de 150 reactivos para practicar.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Tres diferentes dificultades.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Sala global y salas privadas.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Ortographic es una plataforma diseñada para ayudarte a mejorar tu ortografía de una manera divertida y
              educativa. Nos comprometemos a ofrecerte una experiencia interactiva que haga que aprender ortografía sea
              más fácil y entretenido que nunca. </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Pricing Section -->
    <section id="practicar" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Empieza a practicar</h2>
        <p>Únete a la diversión en nuestra sala global o crea tu propia sala privada para disfrutar con tus amigos.</p>
      </div><!-- End Section Title -->

      <div class="container ">

        <div class="row gy-4">

          <div class="col-lg-2"></div>
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h2>Sala global</h2>
              <ul>
                <li><i class="bi bi-check"></i> <span>Está disponible para todos los usuarios.</span></li>
                <li><i class="bi bi-check"></i> <span>Interactúa y compite con jugadores de todo el mundo.</span></li>
                <li><i class="bi bi-check"></i> <span>Encuentra una amplia gama de jugadores con diferente nivel.</span>
                </li>
                <li><i class="bi bi-check"></i> <span> Compite en clasificaciones globales para ver cómo te
                    comparas con otros jugadores.</span></li>
              </ul>
              <a class="buy-btn" id="boton_practicar" href="bd/salas.php">Entrar</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h2>Salas privadas</h2>
              <ul>
                <li><i class="bi bi-check"></i> <span>Requiere código de sala.</span></li>
                <li><i class="bi bi-check"></i> <span>Crea un espacio exclusivo para ti y tus amigos, sin interferencias
                    externas.</span></li>
                <li><i class="bi bi-check"></i> <span>Controla quién puede unirse a tu sala mediante un código de acceso
                    único.</span></li>
                <li><i class="bi bi-check"></i> <span>Disfruta de un ambiente relajado y divertido para jugar y aprender
                    con amigos cercanos.</span></li>
              </ul>
              <a data-bs-toggle="modal" data-bs-target="#salasModal" id="boton_privado" class="buy-btn">Entrar</a>
            </div>
          </div><!-- End Pricing Item -->
          <div class="col-lg-2"></div>

        </div>

      </div>

    </section><!-- /Pricing Section -->


    </section><!-- /Why Us Section -->

    <!-- Services Section -->
    <section id="manual" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Descarga nuestros manuales</h2>
        <p>Puedes dercargar cualquiera de nuestros dos manuales en cualquier momento.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"> <i class="bi bi-journal-arrow-down"></i></div>
              <h4><a class="stretched-link" id="m1">Manual de instalación.</a></h4>
              <p>Descarga nuestra guía de instalación para configurar rápidamente Ortographic en tu dispositivo.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-6 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"> <i class="bi bi-journal-arrow-down"></i></div>
              <h4><a class="stretched-link" id="m2">Manual de usuario.</a></h4>
              <p>Obtén consejos y trucos útiles en nuestra guía del usuario para aprovechar al máximo Ortographic.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <img src="assets/img/escuela.webp" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Importancia de la buena ortografía.</h3>
            <p>La ortografía correcta es una habilidad fundamental en la comunicación escrita. No se trata simplemente
              de seguir reglas gramaticales, sino de transmitir tus ideas de manera clara y efectiva. Una buena
              ortografía no solo facilita la comprensión de tu mensaje, sino que también demuestra tu atención al
              detalle y tu respeto por el lector. En entornos profesionales, académicos y personales, la ortografía
              adecuada puede marcar la diferencia entre una comunicación exitosa y una que caiga en el olvido. Es una
              herramienta poderosa que puede aumentar tu credibilidad, mejorar tu imagen y abrir puertas hacia nuevas
              oportunidades. Por lo tanto, dedicar tiempo y esfuerzo a mejorar tus habilidades ortográficas no solo es
              una inversión en ti mismo, sino también en tu capacidad para comunicarte con eficacia en el mundo que te
              rodea.</p>
          </div>
        </div>
      </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="galeria" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Galeria de imagenes</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Equipo de trabajo</h2>
        <p>Este es nuetro gran equipo de trabajo.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/eidal.webp" class="img-fluid" alt="Eidal"></div>
              <div class="member-info">
                <h4>Eidal Marquez Ambrosio</h4>
                <span>Autor 1.</span>
                <!-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> -->
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/maya.webp" class="img-fluid" alt="Maia"></div>
              <div class="member-info">
                <h4>Maia Michelle Morales Ramíres.</h4>
                <span>Autor 2.</span>
                <!-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p> -->
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Roberto Ruiz Mendoza.</h4>
                <span>Asesor técnico.</span>
                <!-- <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p> -->
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elva Yuridia Morales Luis.</h4>
                <span>Asesor metodológico</span>
                <!-- <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p> -->
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <?php
    //  session_start();
    include 'bd/conexion_be.php';
    if (isset($_SESSION['usuario'])) {

      // nombre de usuario de la sesión
      $nombreUsuario = $_SESSION['usuario'];

      // información del usuario
      $queryUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre = '$nombreUsuario'");
      $usuario = mysqli_fetch_assoc($queryUsuario);

      $conexion->close();
    }
    ?>

    <section class="mi-perfil" class="mt-0 perfil">
      <div class="modal fade" id="MiPerfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content perfil-contenedor">
            <div class="modal-body">
              <div class="card">
                <button class="btn-close" data-bs-dismiss="modal">
                  <i class="bi bi-x-lg"></i>
                </button>
                <div class="card__img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%">
                    <rect fill="#ffffff" width="540" height="450"></rect>
                    <defs>
                      <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="0" y1="0" y2="100%" gradientTransform="rotate(222,648,379)">
                        <stop offset="0" stop-color="#ffffff"></stop>
                        <stop offset="1" stop-color="#FC726E"></stop>
                      </linearGradient>
                      <pattern patternUnits="userSpaceOnUse" id="b" width="300" height="250" x="0" y="0" viewBox="0 0 1080 900">
                        <g fill-opacity="0.5">
                          <polygon fill="#444" points="90 150 0 300 180 300"></polygon>
                          <polygon points="90 150 180 0 0 0"></polygon>
                          <polygon fill="#AAA" points="270 150 360 0 180 0"></polygon>
                          <polygon fill="#DDD" points="450 150 360 300 540 300"></polygon>
                          <polygon fill="#999" points="450 150 540 0 360 0"></polygon>
                          <polygon points="630 150 540 300 720 300"></polygon>
                          <polygon fill="#DDD" points="630 150 720 0 540 0"></polygon>
                          <polygon fill="#444" points="810 150 720 300 900 300"></polygon>
                          <polygon fill="#FFF" points="810 150 900 0 720 0"></polygon>
                          <polygon fill="#DDD" points="990 150 900 300 1080 300"></polygon>
                          <polygon fill="#444" points="990 150 1080 0 900 0"></polygon>
                          <polygon fill="#DDD" points="90 450 0 600 180 600"></polygon>
                          <polygon points="90 450 180 300 0 300"></polygon>
                          <polygon fill="#666" points="270 450 180 600 360 600"></polygon>
                          <polygon fill="#AAA" points="270 450 360 300 180 300"></polygon>
                          <polygon fill="#DDD" points="450 450 360 600 540 600"></polygon>
                          <polygon fill="#999" points="450 450 540 300 360 300"></polygon>
                          <polygon fill="#999" points="630 450 540 600 720 600"></polygon>
                          <polygon fill="#FFF" points="630 450 720 300 540 300"></polygon>
                          <polygon points="810 450 720 600 900 600"></polygon>
                          <polygon fill="#DDD" points="810 450 900 300 720 300"></polygon>
                          <polygon fill="#AAA" points="990 450 900 600 1080 600"></polygon>
                          <polygon fill="#444" points="990 450 1080 300 900 300"></polygon>
                          <polygon fill="#222" points="90 750 0 900 180 900"></polygon>
                          <polygon points="270 750 180 900 360 900"></polygon>
                          <polygon fill="#DDD" points="270 750 360 600 180 600"></polygon>
                          <polygon points="450 750 540 600 360 600"></polygon>
                          <polygon points="630 750 540 900 720 900"></polygon>
                          <polygon fill="#444" points="630 750 720 600 540 600"></polygon>
                          <polygon fill="#AAA" points="810 750 720 900 900 900"></polygon>
                          <polygon fill="#666" points="810 750 900 600 720 600"></polygon>
                          <polygon fill="#999" points="990 750 900 900 1080 900"></polygon>
                          <polygon fill="#999" points="180 0 90 150 270 150"></polygon>
                          <polygon fill="#444" points="360 0 270 150 450 150"></polygon>
                          <polygon fill="#FFF" points="540 0 450 150 630 150"></polygon>
                          <polygon points="900 0 810 150 990 150"></polygon>
                          <polygon fill="#222" points="0 300 -90 450 90 450"></polygon>
                          <polygon fill="#FFF" points="0 300 90 150 -90 150"></polygon>
                          <polygon fill="#FFF" points="180 300 90 450 270 450"></polygon>
                          <polygon fill="#666" points="180 300 270 150 90 150"></polygon>
                          <polygon fill="#222" points="360 300 270 450 450 450"></polygon>
                          <polygon fill="#FFF" points="360 300 450 150 270 150"></polygon>
                          <polygon fill="#444" points="540 300 450 450 630 450"></polygon>
                          <polygon fill="#222" points="540 300 630 150 450 150"></polygon>
                          <polygon fill="#AAA" points="720 300 630 450 810 450"></polygon>
                          <polygon fill="#666" points="720 300 810 150 630 150"></polygon>
                          <polygon fill="#FFF" points="900 300 810 450 990 450"></polygon>
                          <polygon fill="#999" points="900 300 990 150 810 150"></polygon>
                          <polygon points="0 600 -90 750 90 750"></polygon>
                          <polygon fill="#666" points="0 600 90 450 -90 450"></polygon>
                          <polygon fill="#AAA" points="180 600 90 750 270 750"></polygon>
                          <polygon fill="#444" points="180 600 270 450 90 450"></polygon>
                          <polygon fill="#444" points="360 600 270 750 450 750"></polygon>
                          <polygon fill="#999" points="360 600 450 450 270 450"></polygon>
                          <polygon fill="#666" points="540 600 630 450 450 450"></polygon>
                          <polygon fill="#222" points="720 600 630 750 810 750"></polygon>
                          <polygon fill="#FFF" points="900 600 810 750 990 750"></polygon>
                          <polygon fill="#222" points="900 600 990 450 810 450"></polygon>
                          <polygon fill="#DDD" points="0 900 90 750 -90 750"></polygon>
                          <polygon fill="#444" points="180 900 270 750 90 750"></polygon>
                          <polygon fill="#FFF" points="360 900 450 750 270 750"></polygon>
                          <polygon fill="#AAA" points="540 900 630 750 450 750"></polygon>
                          <polygon fill="#FFF" points="720 900 810 750 630 750"></polygon>
                          <polygon fill="#222" points="900 900 990 750 810 750"></polygon>
                          <polygon fill="#222" points="1080 300 990 450 1170 450"></polygon>
                          <polygon fill="#FFF" points="1080 300 1170 150 990 150"></polygon>
                          <polygon points="1080 600 990 750 1170 750"></polygon>
                          <polygon fill="#666" points="1080 600 1170 450 990 450"></polygon>
                          <polygon fill="#DDD" points="1080 900 1170 750 990 750"></polygon>
                        </g>
                      </pattern>
                    </defs>
                    <rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect>
                    <rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect>
                  </svg>
                </div>
                <div class="card__avatar">
                  <a class="image-container">
                    <img src="bd/<?php echo $usuario['foto']; ?>" class="img-fluid" alt="Foto de perfil" width="100px">
                  </a>
                  <button type="button" class="btn btn-light text-center" id="btn-subirImg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <dfn title="Nueva foto de perfil.">
                      <i class="bi bi-upload"></i>
                    </dfn>
                  </button>
                </div>
                <div class="card__title">
                  <h3 class="card-title"><?php echo $usuario['nombre']; ?></h3>
                </div>
                <div class="card__subtitle mb-4 text-center">
                  <p class="card-text"><?php echo $usuario['descripcion']; ?></p>
                  <a href="" class="text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    Editar descripcion
                  </a>
                </div>
                <div class="container mb-5">
                  <div class="row">
                    <div class="col-12 col-md-8 text-center">
                      <p>Logros Obtenidos</p>
                      <div class="container-fluid logros-obtenidos">
                        <div class="row justify-content-center">
                          <?php
                          include 'bd/conexion_be.php';

                          $sql = "SELECT * FROM logros WHERE usuario = '$nombreUsuario'";
                          $consultaLogros = mysqli_query($conexion, $sql);

                          // Verifica si la consulta fue exitosa
                          if ($consultaLogros) {
                            // Recorre cada fila de resultados
                            while ($logro = mysqli_fetch_assoc($consultaLogros)) {
                              // Verifica si cada logro contiene la palabra "completado"
                              if (strpos($logro['logroInicio'], 'completado') !== false) {
                                echo '<div class="col-6 col-md-4">';
                                echo '<p>Bienvenido a Ortographic.</p>';
                                echo '<img src="assets/img/logros/logroInicio.webp" alt="Logro Inicio" width="50">';
                                echo '</div>';
                              }
                              if (strpos($logro['logro1'], 'completado') !== false) {
                                echo '<div class="col-6 col-md-4">';
                                echo '<p>Maestro de la Acentuación.</p>';
                                echo '<img src="assets/img/logros/Acentuacion.webp" alt="Logro 1" width="50">';
                                echo '</div>';
                              }
                              if (strpos($logro['logro2'], 'completado') !== false) {
                                echo '<div class="col-6 col-md-4">';
                                echo '<p>Rey de las Letras.</p>';
                                echo '<img src="assets/img/logros/Logro-letras.webp" alt="Logro 2" width="50">';
                                echo '</div>';
                              }
                              if (strpos($logro['logro3'], 'completado') !== false) {
                                echo '<div class="col-6 col-md-4">';
                                echo '<p>Señor de la Concordancia.</p>';
                                echo '<img src="assets/img/logros/Concordancia.webp" alt="Logro 3" width="50">';
                                echo '</div>';
                              }
                              if (strpos($logro['logro4'], 'completado') !== false) {
                                echo '<div class="col-6 col-md-4">';
                                echo '<p>Experto en Gramática.</p>';
                                echo '<img src="assets/img/logros/Gramatica.webp" alt="Logro 4" width="50">';
                                echo '</div>';
                              }
                              if (strpos($logro['logroFinal'], 'completado') !== false) {
                                echo '<div class="col-6 col-md-4">';
                                echo '<p>Sabio Ortográfico.</p>';
                                echo '<img src="assets/img/logros/logro-final.webp" alt="Logro Final" width="50">';
                                echo '</div>';
                              }
                            }
                          } else {
                            // Manejar el caso en que no se obtengan resultados
                            echo "No se encontraron logros para este usuario.";
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-4">
                      <div class="row">
                        <div class="col-12">
                          <label for="formGroupExampleInput" class="form-label">Buscar usuarios</label>
                          <input type="text" class="form-control" id="buscarUsuarios" placeholder="Ingresa el nombre de Usuario" aria-label="First name">
                        </div>
                        <div class="col-12">
                          <ul class="list-group" id="listaUsuarios">

                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>  -->
          </div>
        </div>
      </div>
    </section>

    <section id="modales" class="mt-0 perfil">
      <div class="modal-foto-de-perfil">

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form id="formSubirImagen" action="bd/subirImagen.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="accion" value="btn-subirImg">
                <div class="modal-header">
                  <h3 class="modal-title fs-5" id="staticBackdropLabel">Nueva foto de perfil.</h3>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="inputImagen" class="form-label">Seleccione una imagen.</label>
                    <input class="form-control" type="file" name="foto" required>
                  </div>
                  <p><b>Nota:</b> La imagen se subirá con un ancho de 250px y no debe pesar más de 50 MB.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#MiPerfil">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-descripcion">

        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title fs-5" id="staticBackdropLabel">Cambiar descripción.</h3>

              </div>
              <form id="descripcionForm" action="bd/subirImagen.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="accion" value="btn-descripcion">
                <div class="modal-body">
                  <p><b>Nota:</b> La descripción no debe rebasar los 100 caracteres.</p>

                  <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea type="text" class="form-control" id="descripcion" name="descripcion" maxlength="100" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#MiPerfil">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Aceptar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <?php
      if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error === "en-foto") {
          echo '
                        <script>
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: "Algo salio mal, vuelva a intentarlo mas tarde."
                            });
                        </script>
                    ';
        } else if ($error === 'archivoErroneo') {
          echo '
                        <script>
                            Swal.fire({
                                icon: "error",
                                title: "Formato incorrecto.",
                                text: "Asegurate de seleccionar una imagen con el formato correcto (png, jpg, jpeg)."
                            });
                        </script>
                    ';
        } else if ($error === 'archivoPesado') {
          echo '
                        <script>
                            Swal.fire({
                                icon: "error",
                                title: "Imagen muy pesada.",
                                text: "Asegurate de seleccionar una imagen que no rebase los 50 MB."
                            });
                        </script>
                    ';
        } else if ($error === 'descripcion_prohibida') {
          echo '
                        <script>
                            Swal.fire({
                                icon: "error",
                                title: "Descrpición ofensiva.",
                                text: "Evite poner palabras ofensivas en la descripción."
                            });
                        </script>
                    ';
        }
      } else if (isset($_GET['exito'])) {
        $exito = $_GET['exito'];
        if ($exito === "en-foto") {
          echo '
                        <script>
                            Swal.fire({
                                icon: "success",
                                title: "Foto subida con exito.",
                                text: "Puedes verla entrando nuevamente a tu perfil."
                            });
                        </script>
                    ';
        } else if ($exito === 'descripcionExitosa') {
          echo '
                        <script>
                            Swal.fire({
                                icon: "success",
                                title: "Descripción aceptada.",
                                text: "Puedes verla entrando nuevamente a tu perfil."
                            });
                        </script>
                    ';
        }
      }
      ?>
    </section>

    <section id="tu-perfil" class="mt-0 perfil">

      <?php

      // session_start();
      include 'bd/conexion_be.php';

      if (isset($_GET['id'])) {
        // Obtiene el ID del usuario de la URL y lo limpia para evitar inyección de SQL
        $usuarioID = mysqli_real_escape_string($conexion, $_GET['id']);

        // Realiza una consulta para obtener la información del usuario utilizando el ID
        $sql = "SELECT * FROM Usuarios WHERE nombre = '$usuarioID'";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
          $usuario = $resultado->fetch_assoc();
      ?>
          <script>
            Swal.fire({
              html: `<div class="card">
                            <a class="image-container">
                                <img src="bd/<?php echo $usuario['foto']; ?>" class="img-fluid" alt="Foto de perfil" width="150px">
                            </a>

                            <div class="card__title mt-3 ">
                                <h1 class="card-title"><?php echo $usuario['nombre']; ?></h1>
                            </div>

                            <div class="card__subtitle">
                                <p class="card-text"><?php echo $usuario['descripcion']; ?></p>
                            </div>

                            <div class="container">
                            <p class="mt-5">Logros Obtenidos</p>
                                        <div class="container-fluid logros-obtenidos">
                                            <div class="row">
                                                <?php
                                                include 'bd/conexion_be.php';

                                                $sql2 = "SELECT * FROM logros WHERE usuario = '$usuarioID'";
                                                $consultaLogros2 = mysqli_query($conexion, $sql2);

                                                // Verifica si la consulta fue exitosa
                                                if ($consultaLogros2) {
                                                  // Recorre cada fila de resultados
                                                  while ($logro2 = mysqli_fetch_assoc($consultaLogros2)) {
                                                    // Verifica si cada logro contiene la palabra "completado"
                                                    if (strpos($logro2['logroInicio'], 'completado') !== false) {
                                                      echo '<div class="col-6 col-sm-4 m-0">';
                                                      echo '<p>Bienvenido a Ortographic.</p>';
                                                      echo '<img src="assets/img/logros/logroInicio.webp" alt="Logro Inicio" width="50">';
                                                      echo '</div>';
                                                    }
                                                    if (strpos($logro2['logro1'], 'completado') !== false) {
                                                      echo '<div class="col-6 col-sm-4 m-0">';
                                                      echo '<p>Maestro de la Acentuación.</p>';
                                                      echo '<img src="assets/img/logros/Acentuacion.webp" alt="Logro 1" width="50">';
                                                      echo '</div>';
                                                    }
                                                    if (strpos($logro2['logro2'], 'completado') !== false) {
                                                      echo '<div class="col-6 col-sm-4 m-0">';
                                                      echo '<p>Rey de las Letras.</p>';
                                                      echo '<img src="assets/img/logros/Logro-letras.webp" alt="Logro 2" width="50">';
                                                      echo '</div>';
                                                    }
                                                    if (strpos($logro2['logro3'], 'completado') !== false) {
                                                      echo '<div class="col-6 col-sm-4 m-0">';
                                                      echo '<p>Señor de la Concordancia.</p>';
                                                      echo '<img src="assets/img/logros/Concordancia.webp" alt="Logro 3" width="50">';
                                                      echo '</div>';
                                                    }
                                                    if (strpos($logro2['logro4'], 'completado') !== false) {
                                                      echo '<div class="col-6 col-sm-4 m-0">';
                                                      echo '<p>Experto en Gramática.</p>';
                                                      echo '<img src="assets/img/logros/Gramatica.webp" alt="Logro 4" width="50">';
                                                      echo '</div>';
                                                    }
                                                    if (strpos($logro2['logroFinal'], 'completado') !== false) {
                                                      echo '<div class="col-6 col-sm-4 m-0">';
                                                      echo '<p>Sabio Ortográfico.</p>';
                                                      echo '<img src="assets/img/logros/logro-final.webp" alt="Logro Final" width="50">';
                                                      echo '</div>';
                                                    }
                                                  }
                                                } else {
                                                  // Manejar el caso en que no se obtengan resultados
                                                  echo "No se encontraron logros para este usuario.";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                </div>
                                
                        </div>`,
              allowOutsideClick: false,
              showCloseButton: true,
              showConfirmButton: false,
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.close) {
                window.location.href = 'index.php';
              }
            });
          </script>
      <?php
        } else {
          echo "Usuario no encontrado";
        }
      } else {
        // echo "ID de usuario no proporcionado";
      }


      ?>

    </section>

    <!-- salas modal  -->

    <!-- Modal -->
    <div class="modal fade salasModal" id="salasModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <div class="tools">
              <div class="circle">
                <span class="red box"></span>
              </div>
              <div class="circle">
                <span class="yellow box"></span>
              </div>
              <div class="circle">
                <span class="green box"></span>
              </div>
            </div>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row">
                <h3 class="modal-title fs-5" id="staticBackdropLabel">Salas privadas</h3>
                <h5>Disfruta jugando en una sala privada con tus amigos, puedes crear una sala privada o unirte a una utilizando su id.</h5>
                <br>
                <div class="col-12 col-lg-6">
                  <div class="cir d-flex flex-wrap align-items-center justify-content-center">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#salasModal2" id="ing" href="">
                      <i class="bi bi-cloud-plus"></i>
                    </a>
                  </div>
                  <p>Crear una sala</p>
                </div>
                <div class="col-12 col-lg-6">
                  <div class="col-12 col-lg-6">
                    <div class="cir d-flex flex-wrap align-items-center justify-content-center">
                      <a type="button" data-bs-toggle="modal" data-bs-target="#salasModal3" id="exis" href="">
                        <i class="bi bi-cloud-arrow-up"></i>
                      </a>
                    </div>
                    <p>Ingresar a una sala existente</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              <span class="circle1"></span>
              <span class="circle2"></span>
              <span class="circle3"></span>
              <span class="circle4"></span>
              <span class="circle5"></span>
              <span class="text">Regresar</span>
            </button>
            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade salasModal" id="salasModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="tools">
              <div class="circle">
                <span class="red box"></span>
              </div>
              <div class="circle">
                <span class="yellow box"></span>
              </div>
              <div class="circle">
                <span class="green box"></span>
              </div>
            </div>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body">
            <h3 class="modal-title fs-5" id="staticBackdropLabel">Sala nueva</h3>

            <h4 class="mt-3" id="id-sala">Código de la nueva sala: </h4>
            <span>El código se vuelve único en el momento de la creación de la sala.</span>

            <form action="bd/salas.php" method="post" enctype="multipart/form-data" class="mt-5" id="formulario">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la sala:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sala">
              </div>

              <div class="mb-3">
                <label for="dificultad">Selecciona las dificultades que quieres para esta sala:</label>
                <div>
                  <input type="checkbox" id="facil" name="dificultad1" value="Facil">
                  <label for="facil">Fácil</label>
                </div>
                <div>
                  <input type="checkbox" id="medio" name="dificultad2" value="Medio">
                  <label for="medio">Medio</label>
                </div>
                <div>
                  <input type="checkbox" id="dificil" name="dificultad3" value="Dificil">
                  <label for="dificil">Difícil</label>
                </div>
              </div>
              <input type="hidden" name="accion" value="nuevo">
              <input type="hidden" name="codigo" value="" id="codigo_sala">

              <button type="submit" class="btn btn-primary" id="btn-submit"><span class="circle1"></span>
                <span class="circle2"></span>
                <span class="circle3"></span>
                <span class="circle4"></span>
                <span class="circle5"></span>
                <span class="text">Aceptar</span>
              </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#salasModal">
              <span class="circle1"></span>
              <span class="circle2"></span>
              <span class="circle3"></span>
              <span class="circle4"></span>
              <span class="circle5"></span>
              <span class="text">Cancelar</span>
            </button>
            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade salasModal" id="salasModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="tools">
              <div class="circle">
                <span class="red box"></span>
              </div>
              <div class="circle">
                <span class="yellow box"></span>
              </div>
              <div class="circle">
                <span class="green box"></span>
              </div>
            </div>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body">
            <h3 class="modal-title fs-5" id="staticBackdropLabel">Sala existente</h3>
            <h5>Ingresa el id de la sala</h5>
            <form action="bd/salas.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sala">
              </div>
              <button type="submit" class="btn btn-primary"><span class="circle1"></span>
                <span class="circle2"></span>
                <span class="circle3"></span>
                <span class="circle4"></span>
                <span class="circle5"></span>
                <span class="text">Aceptar</span>
              </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#salasModal2">
              <span class="circle1"></span>
              <span class="circle2"></span>
              <span class="circle3"></span>
              <span class="circle4"></span>
              <span class="circle5"></span>
              <span class="text">Cancelar</span>
            </button>
            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- fin salas modal  -->

  </main>

  <footer id="creditos" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-8 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Ortographic</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Proyecto presentado como prototipo didáctico para la DEGETI.</p>
            <p>CBTis No 150.</p>
            <p>Ocotlán de Morelos, Oaxaca, México.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Nuestras secciones</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#acerca">Acerca de</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#manual">Manuales</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#galeria">Galeria de imagenes</a></li>
          </ul>
        </div>


        <!-- <div class="col-lg-4 col-md-12">
      <h4>Siguenos en nuestras redes sociales</h4>
      <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
      <div class="social-links d-flex">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
    </div> -->

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© 2024 Copyright DGETI - CBTis No. 150.</p>
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BootstrapMade</strong> <span>All Rights Reserved</span>
      </p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Template diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    //aqui la alerta y verificcion
    document.getElementById('boton_practicar').addEventListener('click', function(event) {
      event.preventDefault();

      <?php if (!isset($_SESSION['usuario'])) { ?>
        // Si la sesión no está iniciada, muestra una alerta
        Swal.fire({
          icon: "info",
          title: "Inicia sesión",
          text: "Debes iniciar sesión para tener una mejor experiencia del juego."
        }).then(() => {
          window.location.href = 'inicio_sesion.php';
        });
      <?php } else { ?>
        window.location.href = 'bd/salas.php'
      <?php } ?>

    });

    document.getElementById('boton_privado').addEventListener('click', function(event) {
      event.preventDefault();

      <?php if (!isset($_SESSION['usuario'])) { ?>
        // Si la sesión no está iniciada, muestra una alerta
        Swal.fire({
          icon: "info",
          title: "Inicia sesión",
          text: "Debes iniciar sesión para tener una mejor experiencia del juego."
        }).then(() => {
          window.location.href = 'inicio_sesion.php';
        });
      <?php } ?>
    });
  </script>


</body>

</html>