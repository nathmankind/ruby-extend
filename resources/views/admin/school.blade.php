@extends('admin.layouts.master')
@section('title')
    Rubies Tech | Schools
@endsection
@section('content')
    <!--main content start-->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a data-toggle="modal" data-target="#add-modal" class="btn btn-primary">Add School</a>
        </section>
        <!-- Main content -->
        <section class="content">
        @include('admin.includes.message-block')
        <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Schools</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th><i class=" fa fa-trash"></i> Edit/Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($schools as $school)
                                        <tr class="school{{$school->id}}">
                                            <td>{{$school->name}}</td>
                                            <td>{{$school->description}}</td>
                                            <td><button class="edit-modal btn btn-info" data-id="{{$school->id}}"
                                                        data-name="{{$school->name}}" data-description="{{$school->description}}">
                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                </button>
                                                <button class="delete-modal btn btn-danger" data-id="{{$school->id}}"
                                                        data-name="{{$school->name}}" data-description="{{$school->description}}">
                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                </button></td>
                                        </tr>
                                    @empty
                                        <p>No school found.</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
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
    <!-- /.content-wrapper -->
    {{--</section><! --/wrapper -->--}}
    {{--</section><!-- /MAIN CONTENT -->--}}
    <div class="modal fade" id="add-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('school.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"></h4>
                    </div>

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <textarea  class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description"></textarea>
                            </div>
                        </div>
                        <input class="form-control" type="hidden" id="id"/>
                    </form>
                    <div class="deleteContent">
                        Are you Sure you want to delete <span class="dname"></span> ? <span
                                class="hidden did"></span>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn actionBtn" data-dismiss="modal">
                            <span id="footer_action_button" class='glyphicon'> </span>
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <span class='glyphicon glyphicon-remove'></span> Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-modal', function() {
                $('#footer_action_button').text("Update");
                $('#footer_action_button').addClass('glyphicon-check');
                $('#footer_action_button').removeClass('glyphicon-trash');
                $('.actionBtn').addClass('btn-success');
                $('.actionBtn').removeClass('btn-danger');
                $('.actionBtn').addClass('edit');
                $('.modal-title').text('Edit');
                $('.deleteContent').hide();
                $('.form-horizontal').show();
                $('#id').val($(this).data('id'));
                $('#name').val($(this).data('name'));
                $('#description').html($(this).data('description'));
                $('#myModal').modal('show');
            });
            $(document).on('click', '.delete-modal', function() {
                $('#footer_action_button').text(" Delete");
                $('#footer_action_button').removeClass('glyphicon-check');
                $('#footer_action_button').addClass('glyphicon-trash');
                $('.actionBtn').removeClass('btn-success');
                $('.actionBtn').addClass('btn-danger');
                $('.actionBtn').addClass('delete');
                $('.modal-title').text('Delete');
                $('.did').text($(this).data('id'));
                $('.deleteContent').show();
                $('.form-horizontal').hide();
                $('.dname').html($(this).data('name'));
                $('#myModal').modal('show');
            });

            $('.modal-footer').on('click', '.edit', function() {

                $.ajax({
                    type: 'post',
                    url: 'school/editItem/',
                    data: {
                        'id': $("#id").val(),
                        'name': $("#name").val(),
                        'description': $("#description").val(),
                        _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        $('.school' + data.id).replaceWith("<tr class='school" + data.id + "'><td>" + data.name + "</td><td>" + data.description +"</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'  data-description='" + data.description + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                    }
                });
            });

            $('.modal-footer').on('click', '.delete', function() {
                $.ajax({
                    type: 'post',
                    url: 'school/deleteItem/',
                    data: {
                        'id': $('.did').text(),
                        _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        $('.school' + $('.did').text()).remove();
                    }
                });
            });
        });



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
    </script>
@endsection