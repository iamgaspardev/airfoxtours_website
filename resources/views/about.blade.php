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
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right"></div>
                    <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Your Gateway to Seamless Travel Experiences</h3>
                            <p data-aos="fade-up">
                                Welcome to Airfox Tours, your trusted partner for effortless travel. We specialize in flight
                                booking and hotel reservations, ensuring your journey is comfortable and memorable.
                            </p>
                            <div class="row">
                                <div class="col-md-5 icon-box" data-aos="fade-up">
                                    <i class="bx bx-car"></i>
                                    <h4>Car Rental</h4>
                                    <p>Explore destinations at your own pace. Choose from our fleet of reliable and
                                        comfortable vehicles for a memorable and convenient travel experience.</p>
                                </div>
                                <div class="col-md-5 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-credit-card"></i>
                                    <h4>Visa Processing</h4>
                                    <p>Navigate visa requirements with ease. Our experts provide comprehensive documentation
                                        support to ensure a smooth visa application process.</p>
                                </div>
                                <div class="col-md-5 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-comment-detail"></i>
                                    <h4>Consultation</h4>
                                    <p>Get expert advice on your travel plans. Our consultation services provide insights
                                        and guidance for a smooth and informed journey.</p>
                                </div>
                                <div class="col-md-5 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <button type="button" class="btn btn-primary"
                                        style="background-image: linear-gradient(to right, #007c9b, #fe825a); border-color: transparent;">
                                        <a href="/service" style="font-size: 15px; text-decoration: none; color: inherit;">
                                            More services ...
                                        </a>
                                    </button>
                                </div>




                            </div>

                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section>

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Team</strong></h2>
                    <hr class="title-line">
                    <p>Meet the Driving Force Behind Airfox Tours: <b style="color:#007c9b"> <i>Our Dedicated Team!</i></b>
                        At Airfox Tours, we take pride in our diverse and talented team. Together, we are committed to
                        providing you with exceptional travel experiences. Get to know the faces behind the scenes!</p>
                </div>

                <div class="row">
                    @include('team-members', ['teamMembers' => $teamMembers])
                </div>
            </div>
        </section><!-- End Our Team Section -->


    </main>
@endsection
