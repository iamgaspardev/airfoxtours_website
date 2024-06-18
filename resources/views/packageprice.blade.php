@extends('layouts.layouts')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h4>Investment Earning Scheme</h4>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>Investment</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= New Section ======= -->
        <section id="intro" class="intro" style="height: 70vh; display: flex; align-items: center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h1>Investment Opportunities on <span style="color:#007c9b;fontweight:border"> Airfox Tours</span>
                        </h1>
                        <p>Discover a variety of investment plans tailored to meet your travel needs and maximize your
                            experiences. From budget-friendly options to luxurious packages, Airfox Tours offers the
                            perfect
                            solution for every traveler. Join us and explore the best travel opportunities with
                            unmatched
                            benefits.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <img src="assets/img/investment.png" class="img-fluid" alt="Investment Opportunities">
                    </div>
                </div>
            </div>
        </section>
        <!-- End New Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2><strong>Our Investment Packages</strong></h2>
                    <hr class="title-line">
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="fade-right">
                            <h3>Silver Package</h3>
                            <h4><sup>$</sup>100<span> / 3Week</span></h4>
                            <ul>
                                <li>Sleeping Hotel</li>
                                <li>City Transport</li>
                                <li>Good food Lunch</li>
                                <li class="na">Return</li>
                                <li class="na">Bonus Gift</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="fade-up">
                            <h3>Gold Package</h3>
                            <h4><sup>$</sup>190<span> / month</span></h4>
                            <ul>
                                <li>Sleeping Hotel</li>
                                <li>City Transport</li>
                                <li>Good food Lunch</li>
                                <li>Return</li>
                                <li class="na">Bonus Gift</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-left">
                            <h3>Platnum Package </h3>
                            <h4><sup>$</sup>200<span> / month</span></h4>
                            <ul>
                                <li>Sleeping Hotel</li>
                                <li>City Transport</li>
                                <li>Good food Lunch</li>
                                <li>Return</li>
                                <li>Bonus Gift</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Book Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="cta-pricing" class="cta-pricing">
            <div class="container">

                <div class="text-center">
                    <h3>Explore Our Investment Opportunities</h3>
                    <p>Join Airfox Tours in making your travel dreams a reality while maximizing your investment potential.
                        Our exclusive packages are designed to provide both exceptional travel experiences and lucrative
                        returns. Don't miss out on this unique opportunity to invest in your adventures.</p>
                    <a class="cta-btn" href="#">Invest Now</a>
                </div>

            </div>
        </section>
        <!-- End Cta Pricing Section -->

    </main>
@endsection
