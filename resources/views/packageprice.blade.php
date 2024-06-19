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
                        <h1>Maximize Your Investment Returns</h1>
                        <p>Looking to enhance your financial portfolio? Explore the lucrative investment opportunities
                            offered by Airfox Tours. With our company investment options, anyone can diversify their
                            portfolio and increase their earnings. Whether you're new to investing or an experienced
                            investor, our tailored investment plans provide a secure and rewarding avenue to grow your
                            wealth. Take the first step towards financial success with Airfox Tours and start earning more
                            on our services. Invest in your future today!</p>
                        <div class="d-flex">
                            <a href="#opportunities" class="btn btn-primary me-2"
                                style="background: linear-gradient(to right, #007c9b, #fe825a); border: none;">Get
                                Started</a>
                            {{-- <a href="#" class="btn btn-outline-light"
                                style="background: linear-gradient(to right, #007c9b, #fe825a); border: none;">Watch
                                Video</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <img src="assets/img/investment.png" class="img-fluid" alt="Investment Opportunities">
                    </div>
                </div>
            </div>
        </section>
        <!-- End New Section -->

        <!-- ======= Key Points Section ======= -->
        <section id="key-points" class="key-points bg-dark text-white py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 mb-4 text-center">
                        <div class="key-point">
                            <h4>5 Years</h4>
                            <p>Trading Experience</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 text-center">
                        <div class="key-point">
                            <h4>24/7</h4>
                            <p>Online Support</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 text-center">
                        <div class="key-point">
                            <h4>200+</h4>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 text-center">
                        <div class="key-point">
                            <h4>10+</h4>
                            <p>Created Opportunities</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Key Points Section -->

        <!-- ======= Opportunities Section ======= -->
        <section id="opportunities" class="opportunities py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 text-center">
                        <img src="assets/img/investments.jpg" class="img-fluid" alt="investments">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card shadow rounded bg-white p-4">
                            <h2>Investment Opportunities by Airfox Tours</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Exclusive travel packages</li>
                                <li class="list-group-item">Customized tour plans</li>
                                <li class="list-group-item">Luxurious accommodation deals</li>
                                <li class="list-group-item">Special discounts on group bookings</li>
                                <li class="list-group-item">Seasonal promotional offers</li>
                            </ul>
                            <button type="button" class="btn btn-primary mt-3"
                                style="background: linear-gradient(to right, #007c9b, #fe825a); border: none;"
                                data-bs-toggle="modal" data-bs-target="#interestedModal">
                                Yes,A am Interested!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Opportunities Section -->

        <!-- ======= Cta Pricing Section ======= -->
        <section id="cta-pricing" class="cta-pricing">
            <div class="container">

                <div class="text-center">
                    <h3>Explore Our Investment Opportunities</h3>
                    <p>Join Airfox Tours in making your travel dreams a reality while maximizing your investment potential.
                        Our exclusive packages are designed to provide both exceptional travel experiences and lucrative
                        returns. Don't miss out on this unique opportunity to invest in your adventures.</p>
                    <a class="cta-btn btn" href="#"
                        style="background: linear-gradient(to right, #007c9b, #fe825a); border: none;color:white">Invest
                        Now</a>
                </div>

            </div>
        </section>
        <!-- End Cta Pricing Section -->

    </main>

    <!-- ======= Interested Form Modal ======= -->
    <div class="modal fade" id="interestedModal" tabindex="-1" aria-labelledby="interestedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title text-center w-100" id="interestedModalLabel"
                        style="font-family: 'Montserrat', sans-serif; font-weight: bold;">Are you Interested?
                        <br>Please fill the form below
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card p-3">
                        <form action="{{ route('interests.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="interestedOn" class="form-label">Interested On</label>
                                    <input type="text" class="form-control" id="interestedOn" name="interestedOn"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary"
                                    style="background: linear-gradient(to right, #007c9b, #fe825a); border: none;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Interested Form Modal -->
@endsection
