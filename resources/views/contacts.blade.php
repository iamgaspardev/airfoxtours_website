@extends('layouts.layouts')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <div class="map-section">
            <iframe style="border:0; width: 100%; height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.916031747192!2d39.2575247!3d-6.8300817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4b7fced4509b%3A0x80ab01c9a5151f8e!2sAirfox%20Tours%20Company%20Ltd!5e0!3m2!1sen!2sbg!4v1539943755621"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <section id="contact" class="contact">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>St. Nicholaus Church,<br> Plot No> 497, Arusha St, Dar es Salaam</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@airfoxtours.com<br>contact@airfoxtours.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+255 662 41646 <br>+255 763 111 106</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg-10">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
@endsection
