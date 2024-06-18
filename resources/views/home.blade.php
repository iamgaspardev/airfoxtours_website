@extends('layouts.layouts')
@section('content')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.png);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Your Gateway to Unforgettable Journeys</h2>
                            <p>Discover a world of seamless travel experiences with Airfox Tours. From expert Visa
                                Processing to comfortable Car Rentals, we offer a comprehensive suite of services. Your
                                adventure starts here!</p>
                            <div class="text-center"><a href="#services" class="btn-get-started">Explore Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.png);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Seamless Travel, Every Step of the Way</h2>
                            <p>Embark on worry-free journeys with Airfox Tours. Whether it's Visa Processing, Flight
                                Booking, Car Rentals, Hotel Booking, Abroad Consultation, or Visa Documentation - we've got
                                you covered. Your adventure begins now!</p>
                            <div class="text-center"><a href="#services" class="btn-get-started">Start Your Journey</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.png);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Your Travel Experience, Elevated</h2>
                            <p>At Airfox Tours, we redefine travel excellence. Immerse yourself in the convenience of our
                                services - Visa Processing, Flight Booking, Car Rentals, Hotel Booking, Abroad Consultation,
                                and Visa Documentation. Let's make your journey extraordinary!</p>
                            <div class="text-center"><a href="#services" class="btn-get-started">Plan Your Adventure</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>Your Gateway to Seamless <span>Travel Experiences</span> !</h3>
                        <p>Explore the world with Airfox Tours - Your trusted partner for hassle-free visa processing,
                            expert hotel management, and convenient car rentals in Dar es Salaam.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Discover Our Services</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->


        <!-- ======= Services Section ======= -->
        <div>
            @include('components.services')
        </div>
        <!-- End Services Section -->

        <div>
            @include('components.whyus')
        </div>

        <!-- ======= Portfolio Section ======= -->

        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Available Posts</li>
                            <!-- =======    <li data-filter=".filter-app">Canada</li>======= -->
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    <div class="row">
                        @foreach ($tours as $tour)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="card">
                                    <img src="{{ asset('uploads/' . $tour->image) }}" class="img-fluid card-img-top"
                                        alt="{{ $tour->title }}" style="height: 200px; object-fit: cover;">
                                    <div class="card-body col">
                                        <h4 class="card-title">{{ $tour->title }}</h4>
                                        <p class="card-text">{{ \Illuminate\Support\Str::limit($tour->description, 100) }}
                                        </p>
                                        <a style=" color: orange; border-color: #007c9b;fontweight:bolder">
                                            Price: {{ $tour->price }}$
                                        </a></br>
                                        <a href="{{ route('consultationform', ['image' => basename($tour->image)]) }}"
                                            class="btn btn-primary mt-2"
                                            style="background-image: linear-gradient(to right, #007c9b, #fe825a); border-color: transparent;">Consult
                                            Us Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Team</strong></h2>
                    <hr class="title-line">
                    <p>Meet the Driving Force Behind Airfox Tours: <b style="color:#007c9b">
                            <i>Our
                                Dedicated Team!</i></b>
                        At Airfox Tours, we take pride in our diverse and talented team. Together, we are committed to
                        providing you with exceptional travel experiences. Get to know the faces behind the scenes!</p>
                </div>

                <div class="row">
                    @include('team-members', ['teamMembers' => $teamMembers])
                </div>
            </div>
        </section><!-- End Our Team Section -->
        {{-- <section>
            <div class="row">
                @include('components.partners')
            </div>
        </section> --}}
    </main>
@endsection
