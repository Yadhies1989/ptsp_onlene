<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/frontend/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">P T S P | P A B J N</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?php echo base_url('v4') ?>/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('v4') ?>/#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Informasi</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('pelayanan/informasi') ?>">Persyaratan Berperkara</a></li>
                  <li><a href="<?php echo base_url('pelayanan/prosedur') ?>">Prosedur Berperkara</a></li>
                  <li><a href="<?php echo base_url('pelayanan/jadwalsidang') ?>">Jadwal Sidang</a></li>
                  <li><a href="#">Video Conference</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Pendaftaran</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('pelayanan/gugatanmandiri') ?>">Gugatan Mandiri</a></li>
                  <li><a href="#">Video Conference</a></li>
                </ul>
              </li>
              <li><a href="#">Kasir</a></li>
              <li><a href="#">Pengaduan</a></li>
              <li class="dropdown"><a href="#"><span>Produk Pengadilan</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url('pelayanan/validasi') ?>">Validasi Akta Cerai</a></li>
                  <li><a href="#">Video Conference</a></li>
                </ul>
              </li>
              <li><a href="#">e-Court</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('v4') ?>/#services">Inovasi</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('v4') ?>/#team">Petugas</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('v4') ?>/#portfolio">Survey Pelayanan</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/') ?>">Khusus KUA</a></li>
          <li><a class="getstarted scrollto" href="<?php echo base_url('v4') ?>/#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url(); ?>assets/frontend/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->