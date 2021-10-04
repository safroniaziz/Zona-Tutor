<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zona Tutor - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/img/favicon.png') }}" rel="icon">
  <link href="{{asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/css/style.css') }}" rel="stylesheet">
  <style>
    

    /* @media (min-width: 375px) and (max-width: 420px){
      .team{
        width: 100%;
        max-height: 430px;
        min-height: 430px;
      }
    } */
  </style>

  <!-- =======================================================
  * Template Name: Mentor - v4.5.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
      <img src="{{ asset('frontend/img/logo.jpeg') }}"  " alt="">
    </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('frontend/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ Route::current()->getName() == "welcome" ? 'active' : '' }}" href="{{ route('welcome') }}"><i class="fa fa-home"></i>&nbsp;Home</a></li>
          <li><a class="{{ Route::current()->getName() == "about" ? 'active' : '' }}" href="{{ route('about') }}"><i class="fa fa-info-circle"></i>&nbsp;Tentang</a></li>
          <li><a class="{{ Route::current()->getName() == "course" ? 'active' : '' }}" href="{{ route('course') }}"><i class="fa fa-list-alt"></i>&nbsp; Kursus</a></li>
          <li><a class="{{ Route::current()->getName() == "tutor" ? 'active' : '' }}" href="{{ route('tutor') }}"><i class="fa fa-users"></i>&nbsp;Tutor</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a class="get-started-btn"><i class="fa fa-sign-in"></i>&nbsp;Masuk / Daftar</a>

    </div>
  </header><!-- End Header -->

  @yield('hero')

  <main id="main">
    @yield('main')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-12 col-sm-6 col-lg-3 col-md-6 footer-contact">
            <h3>Zona Tutor</h3>
            <p>
              Jl. Bla bla bla<br>
              Kota Bengkulu, Bengkulu<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 000000<br>
              <strong>Email:</strong> halo@zonatutor.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kursus</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tutor</a></li>
            </ul>
          </div>

          <div class="col-12 col-sm-6 col-lg-3 col-md-6 footer-links">
            <h4>Kategori</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ielts</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Toefl</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Grammar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Speaking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pronunciation</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Bergabung dan pilih kelas sekarang</h4>
            <a style="margin-left: 0px !important; border-radius:0px !important;" href="courses.html" class="get-started-btn"><i class="fa fa-sign-in"></i>&nbsp;Masuk / Daftar</a>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('frontend/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{asset('frontend/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/main.js') }}"></script>

</body>

</html>