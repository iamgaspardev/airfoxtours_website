@extends('layouts.layouts')
@section('content')

<main id="main">
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-6">
                    <form action="{{ route('login') }}" method="post" role="form" class="col-md-6 php-email-form">
                    @csrf
                        <div class="rowsignIn">
                            <div class="info mt-4 mt-lg-0">
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            <h4 class="info"><b>Sign In</b></h4>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email"
                                required>
                        </div>

                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Your Password" required>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Sign In</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection


<!-- 
@extends('layouts.layouts')
@section('content')

<main id="main">
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-6">
                    <form id="loginForm" action="{{ route('login.submit')}}" method="post" role="form" class="col-md-6 php-email-form">
                        @csrf
                        <div class="rowsignIn">
                            <div class="info mt-4 mt-lg-0">
                                <i class="bi bi-lock-fill"></i>
                            </div>
                            <h4 class="info"><b>Sign In</b></h4>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>

                        <div class="col-md-12 form-group mt-3 mt-md-0">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                        </div>
                        <div id="errorMessage" class="my-3 text-danger" style="display: none;"></div>
                        <div id="loadingIndicator" class="my-3" style="display: none;"> <div class="loading">Loading</div></div>
                        <div class="text-center"><button type="submit" id="submitButton">Sign In</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('loginForm').addEventListener('submit', function (event) {
        document.getElementById('errorMessage').style.display = 'none';
        document.getElementById('loadingIndicator').style.display = 'block';
        document.getElementById('submitButton').disabled = true;
    });
});
</script>

@endsection -->
