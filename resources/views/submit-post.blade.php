@extends('layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('content')
    <section class="header mb-4">
        <div class="jumbotron">
            <div class="container">
                <h1>Submit A Blog Post</h1>
            </div>
        </div>
        <div class="container text-center">
            <p>Do you have something to share about your coding journey and how rubies technologies have imparted your carier in tech? Write lto us, let's help you share your story.</p>
        </div>
    </section>

    <section class="main my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <form action="" method="post">
                        <div class="form-row mb-4">
                            <div class="col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Last Name Name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" required>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-md-12">
                                <label for="country">Enter Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter Email Address" id="email" required>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <label for="post">Share Your Post Here</label>

                            <textarea name="blog-post" id="post" cols="30" rows="15" class="form-control" placeholder="Enter Your Post"></textarea>
                        </div>
                        <button class="btn btn-rubies" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection