@extends('layouts.layouts')
@section('content')
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
                            <div class="card" style="min-height: 500px;">
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
@endsection
