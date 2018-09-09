@extends('layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('styles')
    <link rel="stylesheet" href="assets/css/gallery.css">
@endsection
@section('content')
    <div class="main">
        <div class="gallery-head-section">
            <div class="container">
                <div class="section-text ">
                    <p class="display-4">Pictures Speaks.</p>
                    <p class="lead">We believe, with pictures, we say more than what words would do.</p>
                    <div class="explore py-3">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="main-body">
        <div class="container my-4">
            <h4 class=" title-color text-center my-3">Here are pictures from our activities of our projects</h4>
        </div>
        @forelse($schools as $school)
        <div class="container mb-3">
            <h4 class="title-color py-3">{{$school->name}}</h4>
            <div class="row gallery-pictures">
                @foreach($school->gallery as $gal)
                <div class="col-md-3 mb-3">
                    <img src="{{asset('img/gallery/'.$gal->image)}}" alt="">
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#">SEE MORE</a>
                </div>
            </div>
        </div>
            @empty
            No schools available
        @endforelse

    </section>
@endsection