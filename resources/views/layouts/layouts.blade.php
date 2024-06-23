<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Airfox tours</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #25D366;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-button img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">info@airfoxtours.com</a></i>
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
                <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    @auth
                        {{-- <li><a class="active" href="/testimonial/create">Upload Testmony</a></li> --}}
                        <li class="dropdown"><a href="#"><span>Manage Blog</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/blogs/create">Publish on Blog</a></li>
                                <li><a href="/blogs/view">View Blog</a>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Posts</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/tour/create">Upload Post</a></li>
                                <li><a href="/posts/views">View Post</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>Testimonials</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/testimonial/create">Uploaded Testimonials</a></li>
                                <li><a href="/testimonials/manage">View Testimonials</a></li>
                            </ul>
                        </li>
                        <li><a href="/team/create">Add Team Member</a></li>
                        <li><a href="/consultations">View Application</a></li>
                        <li><a href="/admin/investment">Investment Request</a></li>
                    @else
                        <li><a class="active" href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/service">Services</a></li>
                        <li><a href="/testmonials">Testimonials</a></li>
                        <li><a href="/investments">Investment</a></li>
                        <li><a href="/visa">Tours</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li class="dropdown"><a href="#"><span>What we do</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Consultation</a></li>
                                <li><a href="/visa">Visa Application</a></li>
                                <li><a href="/visa">Hotel Booking</a></li>
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
                                <button type="submit"
                                    style="background-color: transparent; color: orange; border: 1px solid orange; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-left:10px;">Logout</button>
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
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div id="toastMessage" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Thanks for showing interest in Airfox Tours! We'll get back to you soon.
            </div>
        </div>
    </div>

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
                            <br>Dar es salaam <br><br>
                            <strong>Phone:</strong> +255 662 41646<br>
                            <strong>Email:</strong> info@airfoxtours.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/visa">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/contact">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>

                            <li><i class="bx bx-chevron-right"></i> <a href="/visa">Tours</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="/visa">Visa Processing</a></li>
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
                    developed by <a href="https://www.trusttechnology.com"
                        style="color:rgb(255, 149, 0)">trusttechnology</a>
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

    <a href="#" style="margin-right: 5%; margin-bottom:0.7%"
        class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/+255763111106" class="whatsapp-button" target="_blank" title="Chat with us on WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Chat">
    </a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
