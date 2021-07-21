@extends('layouts.app')

@section('title')
NOMADS
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see Beautiful
            <br>
            Moment you never see before
        </p>
        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>
    
    <!-- Main -->
    <main>
        <!-- Statistics -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>1K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>4</h2>
                    <p>Exotic Places</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>85</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>7</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- Mid Title  -->
        <section class="section-exotic" id="paketTravel">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-exotic-heading">
                        <h2>The Most Exotic Places</h2>
                        <p>Something that you never try 
                        <br> 
                        before in this world</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Exotic Content -->
        <section class="section-exotic-content" id="exoticContent">
            <div class="container">
                <div class="section-exotic-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url
                        ($item->galleries->first()->image) : '' }}');"
                        >
                            <div class="travel-country">{{ $item->location }}</div>
                            <div class="travel-location">{{ $item->title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Partner Networks -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/index/logo_partner.png') }}" 
                        alt="Logo Partner" 
                        class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Heading-->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They're never Forget this Trip</h2>
                        <p>Moments were giving them
                            <br> 
                            the best experience</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Content -->
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-exotic-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/index/testimonial-1.png') }}" 
                                alt="User"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Rama</h3>
                                <p class="testimonials">
                                    “ Mantab asliii, surga duniawi ini namanya HAHAHA!! “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Raja Ampat
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/index/testimonial-2.png') }}" 
                                alt="User"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">John</h3>
                                <p class="testimonials">
                                    “ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Pulau Dewata
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/index/testimonial-3.png') }}" 
                                alt="User"
                                class="mb-4 rounded-circle">
                                <h3 class="mb-4">Selena</h3>
                                <p class="testimonials">
                                    “ I loved it when the waves
                                    was shaking harder — I was
                                    scared too “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Pulau Padar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection