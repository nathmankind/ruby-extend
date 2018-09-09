@extends('admin.layouts.master')
@section('title')
    Rubies Tech | Contacts
@endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content">
        @include('admin.includes.message-block')
        <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Contacts</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th><i class=" fa fa-trash"></i> Edit/Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($contacts as $contact)
                                        <tr class="contact{{$contact->id}}">
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->subject}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>
                                                <button class="delete-modal btn btn-danger" data-id="{{$contact->id}}"
                                                        data-name="{{$contact->name}}" data-email="{{$contact->email}}"
                                                        data-subject="{{$contact->subject}}"  data-message="{{$contact->message}}"
                                                        >
                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>No contact found.</p>
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
                            <label class="control-label col-sm-2">contact</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="name">
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

            $('.modal-footer').on('click', '.delete', function() {
                $.ajax({
                    type: 'post',
                    url: 'contacts/deleteItem/',
                    data: {
                        'id': $('.did').text(),
                        _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        $('.contact' + $('.did').text()).remove();
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