@extends('layout.app')

@section('content')

<section class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h1 class="text-white"> {{ $ressource->title }}</h1>
        </div>
    </div>

    <div class="shape2"><img src="assets/img/shape/shape2.png" alt="image"></div>
    <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
    <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
    <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
    <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
    <div class="shape8"><img src="assets/img/shape/shape8.png" alt="image"></div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>


<section class="about-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="{{ asset('prestations/'.$ressource->image) }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <div class="text">
                      
                        <p>{!! $ressource->description  !!}</p>
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection