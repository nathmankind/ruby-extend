@extends('admin.layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                New Post
                <small></small>
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                @include('admin.includes.message-block')
                <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">New Post</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                            <div class="box-body">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category" name="category_id" required>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <input type="file" id="picture" name="picture">
                                </div>
                                <div class="form-group">
                                    <label for="">Body</label>
                                    <textarea class="form-control" id="body" name="body"  rows="10" cols="80" required>
                                     </textarea>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
