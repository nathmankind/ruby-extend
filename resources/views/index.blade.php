@extends('layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('content')

    <div class="head-section">
        <div class="container section-text text-center">
            <h2>RUBIES TECHNOLOGIES</h2>
            <p class="my-3 px-4 lead">Empowering kids and teenagers with digital skills and to help create innovative ideas and build solutions with various technologies.</p>
            <div class="button-head pt-3">
                <a href="{{url('/volunteer')}}" class="btn mr-1 volunteer-btn">Volunteer Now</a><span><button class="btn ml-3 story-btn">Share Your Story</button></span>
            </div>

            <!--
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/IMG_20180815_102247.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/IMG_20180815_114707.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/IMG_20180816_121412.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-caption d-none d-md-block">
                    <h1>Rubies Technologies</h1>
                    <p>Empowering kids and teenagers with digital skills and to help create innovative ideas and build solutions with various technologies. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe excepturi eius.</p>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> -->
        </div>
    </div>
    <section class="intro">
        <div class="container text-center">
            <h1 class="title-color py-5 mb-2 text-center">Tech Education for Kids and Teenagers</h1>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime in assumenda rerum nisi exercitationem! Iusto adipisci quisquam aliquid voluptatum, non ullam esse optio tenetur. Inventore quae ipsum incidunt perferendis alias?</p>
            <div class="row py-3 my-5">
                <div class="col-md-4 py-3">
                    <img src="assets/images/hm-img-1.jpg" alt="">
                </div>
                <div class="col-md-4 py-3">
                    <img src="assets/images/hm-img-2.jpg" alt="">
                </div>
                <div class="col-md-4 py-3">
                    <img src="assets/images/hm-img-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="tools">
        <div class="section-tool">
            <div class="container text-center">
                <h1 class="title-color py-5 my-3 display-4">What We Teach</h1>
            </div>
        </div>
        <div class="section-tool-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/images/scratchgiphy.gif" alt="scratchgiphy">
                    </div>
                    <div class="col-md-8 text text-right">
                        <h2 class="display-4 py-3">Scratch</h2>
                        <p>Scratch is an amazing software that helps young learners learn how to codes arranging them like building blocks(leggo), thereby building amazing things like games, quiz applications and animations.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-tool-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text text-left">
                        <h2 class="display-4 py-3">Web Development</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ab minus aspernatur facere velit repellendus ipsum impedit a facilis commodi eum laboriosam eius iure corporis praesentium molestias explicabo possimus sit?</p>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/Custom-Comment-Box.gif" alt="Custom-Comment-Box">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-tool-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="assets/images/python-coding.gif" alt="python-coding">
                    </div>
                    <div class="col-md-7 text text-right">
                        <h2 class="display-4 py-3">Python Programming</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis excepturi labore cupiditate consequuntur asperiores dolorem eveniet magnam nobis quod vero blanditiis sed, eos alias doloremque eaque optio! Sed, quidem harum.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-tool-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text text-left">
                        <h2 class="display-4 py-3">Android Development</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, ab minus aspernatur facere velit repellendus ipsum impedit a facilis commodi eum laboriosam eius iure corporis praesentium molestias explicabo possimus sit?</p>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/android-dev.png" alt="Custom-Comment-Box">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects mt-5 py-3">
        <div class="container text-center">
            <h1 class="title-color py-3 my-3 display-4">Our Recent Projects</h1>
            <div class="row py-3 mb-5">
                <div class="col-md-4 py-3">
                    <img src="assets/images/project-1.jpg" alt="">
                </div>
                <div class="col-md-4 py-3">
                    <img src="assets/images/project-2.jpg" alt="">
                </div>
                <div class="col-md-4 py-3">
                    <img src="assets/images/project-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="join-team py-5">
        <div class="container text-center">
            <h2 class="title-color">Passionate About Technology?</h2>
            <div class=" pt-4">
                <p class="lead">Join a team of awesome and passionate people volunteering to build the next generation of problem solvers.</p>
            </div>
            <div class="volunteer-btn">
                <button class="btn vol-btn"><a href="{{url('/volunteer')}}">VOLUNTEER NOW</a></button>
            </div>

        </div>
    </section>
@endsection