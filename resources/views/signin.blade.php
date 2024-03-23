@extends('layouts.layouts')
@section('content')

<main id="main">
<section id="contact" class="contact">
  <div class="container">

    
    <div class="row mt-5 justify-content-center" data-aos="fade-up">
      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class=" col-md-6 php-email-form">
        <div class="rowsignIn">
            <div class="info mt-4 mt-lg-0">
            <i class="bi bi-lock-fill"></i>
            </div>
            <h4 class="info" ><b>Sign In</b></h4>
        </div>
            <div class="col-md-12 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Username" required>
            </div>
          
            <div class="col-md-12 form-group mt-3 mt-md-0">
              <input type="password" class="form-control" name="password" id="pasword" placeholder="Your Pin" required>
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
</section><!-- End Contact Section -->

</main>
@endsection