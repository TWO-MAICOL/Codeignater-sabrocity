<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <!-- Favicons -->
  <link href="public/web/img/favicon.png" rel="icon">
  <link href="public/web/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
    rel="stylesheet">
      <!-- Vendor CSS Files -->
    <link href="public/web/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="public/web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/web/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/web/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/web/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="public/web/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
  <link href="public/web/css/style.css" rel="stylesheet">

</head>
<body class="login">
      <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
      <i class="bi bi-phone d-flex align-items-center"><span>+57 315 5683537</span></i>
      <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lun-Jue: 12:00 PM - 10:00 PM/Vie-Sab: 02:00
          PM -
          12:00 AM/Dom: 01:00 PM - 22:00 PM/Fest: 01:00 PM - 12:00 AM</span></i>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
       
      <div class="logo me-auto"> 
       <h1><a href="index">Sabrocity</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active text-white" href= "index">Inicio</a></li>
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" style="height: 20vh;">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel"></div>
    </div>
  </section><!-- End Hero -->
    <main id="main">
    <section class=" abs-center login" id="book-a-table" class="book-a-table" >
        <div class="container">
            <div class="section-title">
                <h2>Inicia <span>sesión</span></h2>
            </div>
            <form id="form" role="form" class="php-email-form abs-center" >
                <div class="row">
                    <div class="col-lg-6 col-md-12 form-group mt-3" style="margin: auto;"> 
                        <input id="user" name="user" type="text" class="form-control" placeholder="usuario" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-6 col-md-12 form-group mt-3" style="margin: auto;"> 
                            <input name="password" id="password" type="password" class="form-control" placeholder="contraseña" data-rule="minlen:1" data-msg="Please enter at least 1 chars"><div class="validate"></div>
                        </div>
                    </div>
                    <div class="error-message text-center" style="color: red; margin-top: 1rem;"></div>
                </div>
              <div class="text-center">
                <br><button id="ingresar" class="btn book-a-table-btn" type="submit">Ingresar</button>
              </div>
            </form>
        </div>
    </section>
 </main>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Sabrocity</h3>
      <p> ¡Saborea la vida con nuestras deliciosas comidas y helados!</p>
      <div class="social-links">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/web/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public/web/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/web/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- ========== Jquery ========= -->
  <script src="public/web/js/jquery-3.6.3.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="public/web/js/main.js"></script>
  <!-- session -->
  <script src="public/js/login.js"></script>
</body>
</html>