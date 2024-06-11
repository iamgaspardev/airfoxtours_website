<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Airfox tours</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@airfoxtours.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+255 662 41646</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html">Flattern</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
        @auth
          <li><a class="active" href="/testimonial/create">Upload Testmony</a></li>
          <li><a href="/tour/create">Upload Post</a></li>
          <li><a href="/consultations">View Application</a></li>
          <li><a href="/testimonials/manage">Uploaded Testimonials</a></li>
          <li><a href="/team/create">Add Team Member</a></li>
          @else
          <li><a class="active" href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/service">Services</a></li>
          <li><a href="/testmonials">Testimonials</a></li>
          <li><a href="/packageprice">Pricing</a></li>
          <li><a href="/visa">Tours</a></li>
          
          <li><a href="/blog">Blog</a></li>
          <li class="dropdown"><a href="#"><span>What we do</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Consultation</a></li>
              
              <li><a href="#">Visa Application</a></li>
              <li><a href="#">Hotel Booking</a></li>
              <li><a href="#">More ...</a></li>
            </ul>
          </li>
          <li><a href="/contact">Contact</a></li>
          @endauth
        </ul>
       
        <div class="cta-btn-container text-center">
        @auth
        <!-- Show logout button -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="text-center">
          <button type="submit" style="background-color: transparent; color: orange; border: 1px solid orange; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-left:10px;">Logout</button>
         </div>
        </form>
         @else
        <!-- Show Sign In button -->
        <a class="cta-btn align-middle" href="/signin">Sign In</a>
        @endauth
        </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Airfox Tours</h3>
            <p>
              Arusha road Street <br>
              <br>
              United States <br><br>
              <strong>Phone:</strong> +255 662 41646<br>
              <strong>Email:</strong> info@airfoxtours.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tours</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Visa Processing</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Get Daily Info</h4>
            <p>Join our place by getting daily notification when you subscribe</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>airfoxtours</span></strong>. All Rights Reserved
        </div>
        <div class="credits" style="color:#ffff">
          developed by <a href="#">trusttechnology</a>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>