@extends('layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('styles')
    <link rel="stylesheet" href="assets/css/blog.css">
@endsection
@section('content')
    <main class="container all-content">
        <h3 class="title-color mb-5">Latest News</h3>
        <div class="row">
            <div class="col-md-8">
                @forelse($posts as $post)
                <div class="contain-article mb-5">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="date">
                                <h1>{{date('j',strtotime($post->created_at))}}</h1>
                                <hr>
                                <h4>{{date('F',strtotime($post->created_at))}}</h4>
                            </div>
                            <img src="{{asset('images/post/'.$post->image)}}" alt="{{$post->title}}">
                        </div>
                        <div class="col-md-7">
                            <div class="title">
                                <h3><a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a> </h3>
                            </div>
                            <hr>
                            <p>{!! $post->body !!}}</p>
                        </div>
                    </div>
                    <div class="row article-base">
                        <div class="author col-md-6 text-left">
                            <p>Posted By {{$post->user->name}}</p>
                        </div>
                        <div class="read-more col-md-6 text-right">
                            <p><a href="{{route('blog.single',$post->slug)}}">Read More <span style="font-size: 15px;">></span></a></p>
                        </div>
                    </div>
                </div>
                @empty
                   <p> No posts Available</p>
                @endforelse



                <div class="container mt-3 mb-5">
                    <div class="row">
                        <div class="col-md-12 postpagination">
                            <ul class="text-center">
                                {{--<li><a href="#">1</a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">...</a></li>--}}
                                {{--<li><a href="#">10</a></li>--}}
                                {{ $posts->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          @include('includes.aside')
        </div>
    </main>
@endsection