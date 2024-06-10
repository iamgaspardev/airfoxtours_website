@extends('layouts.layouts')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

   <!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up">
          <div class="icon"><i class="bi bi-briefcase"></i></div>
          <h4 class="title"><a href="#">Visa Processing</a></h4>
          <p class="description">Embark on your travel journey hassle-free with our expert visa processing services. We handle the paperwork, ensuring a smooth application process.</p>
          <!-- <a class="cta-btn align-middle" href="#">Apply Now</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bi bi-card-checklist"></i></div>
          <h4 class="title"><a href="#">Flight Booking</a></h4>
          <p class="description">Fly with confidence. Explore a range of flight options tailored to your preferences and budget. Book your tickets with Airfox Tours for a seamless journey.</p>
          <!-- <a class="cta-btn align-middle" href="#">Book a Flight</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bi bi-bar-chart"></i></div>
          <h4 class="title"><a href="#">Car Rentals</a></h4>
          <p class="description">Explore destinations at your own pace. Choose from our fleet of reliable and comfortable vehicles for a memorable and convenient travel experience.</p>
          <!-- <a class="cta-btn align-middle" href="#">Rent a Car</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bi bi-binoculars"></i></div>
          <h4 class="title"><a href="#">Hotel Booking</a></h4>
          <p class="description">Indulge in comfort and luxury. Book your stay with Airfox Tours for a wide range of accommodation options tailored to your preferences and budget.</p>
          <!-- <a class="cta-btn align-middle" href="#">Book a Hotel</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="bi bi-brightness-high"></i></div>
          <h4 class="title"><a href="#">Abroad Consultation</a></h4>
          <p class="description">Get expert advice on international travel. Our consultation services provide insights and guidance for a smooth and informed journey.</p>
          <!-- <a class="cta-btn align-middle" href="#">Consult Now</a> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
          <div class="icon"><i class="bi bi-calendar4-week"></i></div>
          <h4 class="title"><a href="#">Visa Documentation</a></h4>
          <p class="description">Navigate visa requirements with ease. Our experts provide comprehensive documentation support to ensure a smooth visa application process.</p>
          <!-- <a class="cta-btn align-middle" href="#">Learn More</a> -->
        </div>
      </div>
    </div>

  </div>
</section><!-- End Services Section -->
    <section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2><strong>Why Choose Airfox Tours</strong></h2>
      <p>At Airfox Tours, we create unique opportunities for all our customers, ensuring an unforgettable travel experience tailored to your desires. Discover the exceptional features we offer that set us apart from the rest.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <h4>Customizable Itineraries</h4>
              <p>Personalize your travel plans to fit your schedule and interests with our flexible itinerary options.</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <h4>Exclusive Destinations</h4>
              <p>Explore hidden gems and exclusive locations that you won't find in standard travel packages.</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <h4>Premium Support</h4>
              <p>Enjoy 24/7 customer support from our dedicated team, ensuring a smooth and worry-free journey.</p>
            </a>
          </li>
          
        </ul>
      </div>
      <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <figure>
              <img src="assets/img/airplane2.png" alt="Customizable Itineraries" class="img-fluid">
            </figure>
          </div>
          <div class="tab-pane" id="tab-2">
            <figure>
              <img src="assets/img/airplane1.png" alt="Exclusive Destinations" class="img-fluid">
            </figure>
          </div>
          <div class="tab-pane" id="tab-3">
            <figure>
              <img src="assets/img/airplane3.png" alt="Premium Support" class="img-fluid">
            </figure>
          </div>
        
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->


  </main>

@endsection