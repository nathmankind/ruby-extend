@extends('admin.layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- /.row -->
            {{--<div class="row">--}}
                {{--<div class="col-xs-12">--}}
                    {{--<div class="box">--}}
                        {{--<div class="box-header">--}}
                            {{--<h3 class="box-title">Gallery</h3>--}}
                        {{--</div>--}}
                        {{--<!-- /.box-header -->--}}
                        {{--<div class="box-body">--}}
                            {{--<table id="example1" class="table table-bordered table-striped">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>Name</th>--}}
                                    {{--<th>Picture</th>--}}
                                    {{--<th>Actions</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@forelse($schools as $school)--}}
                                    {{--<tr class="">--}}
                                        {{--<td>{{$school->name}}</td>--}}
                                        {{--<td>@foreach($school->gallery as $gal)--}}
                                            {{--{{$gal->title}}--}}
                                        {{--@endforeach--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--<button class="delete-modal btn btn-danger" data-id=""--}}
                                                    {{--data-name="">--}}
                                                {{--<span class="glyphicon glyphicon-trash"></span> Delete--}}
                                            {{--</button></td>--}}
                                    {{--</tr>--}}
                                {{--@empty--}}
                                    {{--<p>No Posts found.</p>--}}
                                {{--@endforelse--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                        {{--</div>--}}
                        {{--<!-- /.box-body -->--}}
                    {{--</div>--}}
                    {{--<!-- /.box -->--}}
                {{--</div>--}}
                {{--<!-- /.col -->--}}
            {{--</div>--}}
            <!-- /.row -->

            <div class="row">
                @forelse($schools as $school)
                <div class="col-md-4">
                    <!-- Box Comment -->
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">
                                <span class="username"><a href="#">{{$school->name}}</a></span>
                            </div>
                            <!-- /.user-block -->
                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @foreach($school->gallery as $gal)
                            <img class="img-responsive pad" src="{{asset('/img/gallery/'.$gal->image)}}" alt="{{$gal->title}}">
                            @endforeach
                            <p></p>


                        </div>
                        <!-- /.box-body -->


                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                @empty
                <p> No gallery found</p>
                @endforelse
            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection