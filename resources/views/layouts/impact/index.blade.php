<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name')}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('theme/impact/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/impact/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('theme/impact/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('theme/impact/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('theme/impact/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('theme/impact/assets/css/main.css')}}" rel="stylesheet">
<style type="text/css">
.bg-cover {
  background-size: cover;
}
.bg-home {
  background-image: url('{{asset('theme/impact/assets/img/hero.png')}}');
}
.hero {
  background: transparent;
}
.header {
  transition: all 0.5s;
  z-index: 997;
  height: 90px;
  background-color: none;
}
.headertransparent{
    background-color: transparent;

}
.headersolid {
  transition: all 0.5s;
  z-index: 997;
  height: 90px;
  background-color: var(--color-primary);
}
.borderbottom ul li{
    border-bottom: 1px solid #e4e4e4;
    list-style: none;
    font-size: 18pt;
    padding: 5px 0;
}
</style>


  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div class="bg-home bg-cover">
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header headertransparent d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{asset('theme/impact/assets/img/logo.png')}}" alt="LPPOM MUI SUMSEL">
        {{-- <h1>Impact<span>.</span></h1> --}}
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li class="dropdown"><a href="#services"><span>Prosedur & Regulasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
                <li><a href="#">Regulasi Halal di Indonesia</a></li>
                <li><a href="#">Regulasi LPPOM MUI</a></li>
                <li><a href="#">Prosedur pasar Indonesia</a></li>
                <li><a href="#">Pendaftaran sertifikat halal</a></li>
                <li><a href="#">Prosedur Pasar Luar negri</a></li>
                <li><a href="#">Prosedur Keluhan dan Banding</a></li>

                {{-- <li class="dropdown"><a href="#"><span>Regulasi LPPOM MUI</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li> --}}

              </ul>
          </li>
          <li><a href="#team">Struktur Organisasi</a></li>
          <li><a href="blog.html">Informasi</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->
  @yield('content')

  @include('layouts.impact.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('theme/impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('theme/impact/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('theme/impact/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('theme/impact/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('theme/impact/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  {{-- <script src="{{asset('theme/impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script> --}}
  {{-- <script src="{{asset('theme/impact/assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{asset('theme/impact/assets/js/main.js')}}"></script>
  <script type="text/javascript">
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the header
    var header = document.getElementById("header");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the solid class to the header when you reach its scroll position. Remove "solid" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.remove("headertransparent");
        header.classList.add("headersolid");
      } else {
        header.classList.remove("headersolid");
        header.classList.add("headertransparent");

      }
    }
    </script>
</body>

</html>
