@extends('layouts.layouts')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
  <div class="container">

    <div class="row no-gutters">
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
      <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
        <div class="content d-flex flex-column justify-content-center">
          <h3 data-aos="fade-up">Your Gateway to Seamless Travel Experiences</h3>
          <p data-aos="fade-up">
            Welcome to Airfox Tours, your trusted partner for effortless travel. We specialize in flight booking and hotel reservations, ensuring your journey is comfortable and memorable.
          </p>
          <div class="row">
            <div class="col-md-6 icon-box" data-aos="fade-up">
              <i class="bx bx-plane"></i>
              <h4>Flight Booking</h4>
              <p>Discover a world of destinations. We offer a range of flight options tailored to your preferences, ensuring a smooth and enjoyable travel experience.</p>
            </div>
            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-hotel"></i>
              <h4>Hotel Booking</h4>
              <p>Indulge in comfort and luxury. Explore our diverse selection of accommodations, carefully curated to suit every traveler's needs and preferences.</p>
            </div>
            <!-- Add more service-related icon-boxes if needed -->

            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-location-plus"></i>
              <h4>Our Locations</h4>
              <p>We are conveniently located in Dar es Salaam, Arusha Street. Visit us for personalized travel assistance and expert advice on your next adventure.</p>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section>

     <!-- ======= Our Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Team</strong></h2>
                    <p>Meet the Driving Force Behind Airfox Tours: <b style="color:#007c9b"> <i>Our Dedicated Team!</i></b>
                        At Airfox Tours, we take pride in our diverse and talented team. Together, we are committed to
                        providing you with exceptional travel experiences. Get to know the faces behind the scenes!</p>
                </div>

                <div class="row">
                    @include('team-members', ['teamMembers' => $teamMembers])
                </div>
                <!-- <div class="row">
                                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                        <div class="member" data-aos="fade-up">
                                            <div class="member-img">
                                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Mr Fuad Ally</h4>
                                                <span>Chief Executive Officer</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                                            <div class="member-img">
                                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Ummyhadjat Othuman</h4>
                                                <span>Marketing Director</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                                            <div class="member-img">
                                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Mr Fuad Ally</h4>
                                                <span>Chief Executive Officer</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                                            <div class="member-img">
                                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-twitter"></i></a>
                                                    <a href=""><i class="bi bi-facebook"></i></a>
                                                    <a href=""><i class="bi bi-instagram"></i></a>
                                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Ummyhadjat Othuman</h4>
                                                <span>Marketing Director</span>
                                            </div>
                                        </div>
                                    </div>

                                </div> -->

            </div>
        </section><!-- End Our Team Section -->

    
  </main>
@endsection