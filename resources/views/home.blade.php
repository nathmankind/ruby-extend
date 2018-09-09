@extends('admin.layouts.master')
@section('title')
    RubiesTech | Empowering to Innovate
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{count($users)}}</h3>
                            <p>All Users</p>
                        </div>
                        <div class="icon">
                            <i class="ion-android-bicycle"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{count($posts)}}</h3>
                            <p>Posts</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{count($volunteers)}}</h3>
                            <p>Volunteer</p>
                        </div>
                        <div class="icon">
                            <i class="ion-ios-paper-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Users</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td><a class="edit-modal btn btn-info"
                                               href="" >
                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                            </a>
                                            <button class="delete-modal btn btn-danger" data-id=""
                                                    data-name="">
                                                <span class="glyphicon glyphicon-trash"></span> Delete
                                            </button></td>
                                    </tr>
                                @empty
                                    <p>No Users found.</p>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example1').DataTable( {
                dom: 'Bfrtip',
                buttons: [{
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> Print',
                    title: $('h1').text()
                },
                    {
                        extend: 'pdf',
                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                        title: $('h1').text()
                    }]
            });
        });
    </script>
@endsection