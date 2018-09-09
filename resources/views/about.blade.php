@extends('layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('styles')
    <link rel="stylesheet" href="assets/css/about.css">
    @endsection
@section('content')
    <main class="main">
        <div class="about-head-section">
            <div class="container">
                <div class="section-text ">
                    <h1>About Us</h1>
                    <p>What makes us outstanding? That's simple. <br> Its the people who work here.</p>
                    <div class="explore py-3">
                        <a href="#about-us">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="about-us my-5 pt-3" id="about-us">
            <div class="container">
                <h1 class="title-color">We Are Building The African Future</h1>
                <hr>
                <div class="row py-3">
                    <div class="col-md-7">
                        <p>Rubies Technologies is focused on building the future we believe its possible with the use of technology in africa by teaching kids and teens how to build software with different technologies to improve lives and solve problems.</p>
                        <p>In the nearest future, there won't be enough people to fill the tech jobs that are believed to be coming in the next decades or so. The technology industry is fast growing at an incredible pace and the need for designers, programmers, problem solvers and innovators keep increasing. </p>
                        <p>By training every african child and ensuring they are equipped with the required knowledge, we believe, africa is on its way to the global stage.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="pt-4" src="assets/images/aside-img.jpg" alt="Insert-img-here">
                    </div>
                </div>
            </div>
        </div>
        <div class="porfolio my-5">
            <div class="container">
                <h1 class="title-color">Our Portfolio</h1>
                <hr>
                <div class="wrap-counter mb-3 pb-5 px-3">
                    <p class="text-center">Our projects so far has cut across many schools and so many students has benefit from our trainings and code camps coupled with our passionate facilitators and volunteers ensuring every one is equip with digital skills.</p>
                    <div class="row text-center">
                        <div class="col-md-4 col-sm-4 count">
                            <div class="counter first" data-count="25">0</div>
                            <p>Schools</p>
                        </div>
                        <div class="col-md-4 col-sm-4 count">
                            <div class="counter second" data-count="500">0</div>
                            <p>Students</p>
                        </div>
                        <div class="col-md-4 col-sm-4 count">
                            <div class="counter third" data-count="22">0</div>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection