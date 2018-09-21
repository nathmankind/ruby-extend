@extends('layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('styles')
    <link rel="stylesheet" href="assets/css/blog.css">
@endsection
@section('content')
    <div class="main">
        <div class="blog-head-section">
            <div class="container">
                <div class="section-text ">
                    <h1>{{$post->title}}</h1>
                    <p>{{$post->user->name}} <br></p>
                    <div class="explore py-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="container all-content" style="margin-top: 4rem;">
        <div class="row">
            <div class="col-md-8">
                <div class="contain-article mb-5">
                    <div class="title">
                        <h3><a >{{$post->title}}</a> </h3>
                        <div>
                            <img src="{{asset('images/post/'.$post->image)}}" alt="{{$post->title}}">
                            <div class="blog-details">
                                {!!$post->body!!}
                                 </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments div -->
                {{--<div id="comments-div">--}}
                    {{--<div>--}}
                        {{--<p id="comments">Comments</p>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-2 col-sm-2">--}}
                                {{--<img src="assets/images/commenter.png" class="img-fluid" alt="An Image">--}}
                            {{--</div>--}}
                            {{--<div class="col-md-10 col-sm-10">--}}
                                {{--<form style="margin-top: 20px;">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" class="form-control" id="post-comment" placeholder="Write a comment">--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="commentsdiv">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-2 col-sm-2">--}}
                                    {{--<img src="assets/images/commenter-two.png" class="img-fluid" alt="An Image">--}}
                                {{--</div>--}}
                                {{--<div class="col-md-10 col-sm-10">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-2 col-sm-3">--}}
                                            {{--<p class="commenter-name">Xyluz</p>--}}
                                            {{--<p>3 mins ago</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-10 col-sm-9">--}}
                                            {{--<div class="flex-container pull-right">--}}
                                                {{--<div class="flex-item">--}}
                                                    {{--<i class="fa fa-share"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="flex-item">--}}
                                                    {{--<i class="fa fa-share"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="flex-item">--}}
                                                    {{--<i class="fa fa-share"></i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<p class="commenter-comment">My loremDuis aute irure dolor in Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="commentsdiv">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-2 col-sm-2">--}}
                                    {{--<img src="assets/images/commenter-two.png" class="img-fluid" alt="An Image">--}}
                                {{--</div>--}}
                                {{--<div class="col-md-10 col-sm-10">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-3 col-sm-3">--}}
                                            {{--<p class="commenter-name">Xyluz</p>--}}
                                            {{--<p>3 mins ago</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-9 col-sm-9">--}}
                                            {{--<div class="flex-container pull-right">--}}
                                                {{--<div class="flex-item">--}}
                                                    {{--<i class="fa fa-share"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="flex-item">--}}
                                                    {{--<i class="fa fa-share"></i>--}}
                                                {{--</div>--}}
                                                {{--<div class="flex-item">--}}
                                                    {{--<i class="fa fa-share"></i>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                        {{--<p class="commenter-comment">My loremDuis aute irure dolor in Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-2 col-sm-2">--}}
                                            {{--<div class="replycomment-line"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-10 col-sm-10 space-left">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-3 col-sm-2">--}}
                                                    {{--<img src="assets/images/commenter-two.png" class="img-fluid" alt="An Image">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-9 col-sm-10">--}}
                                                    {{--<div>--}}
                                                        {{--<p class="commenter-name">Xyluz</p>--}}
                                                        {{--<p>3 mins ago</p>--}}
                                                        {{--<p class="commenter-comment">My loremDuis aute irure dolor in Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="text-center">--}}
                            {{--<form>--}}
                                {{--<button type="button" class="btn btn-info load hvr-shrink">LOAD MORE COMMENTS</button>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            @include('includes.aside')
        </div>
    </main>
@endsection