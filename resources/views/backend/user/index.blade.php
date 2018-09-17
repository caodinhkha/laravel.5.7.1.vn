@extends('layouts.app')
@section('title', '| Users Management')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users Management</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="btn-group pull-right">
                        <a href="{{ route('users.create') }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>
                    <table id="tbl_users" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('H:i:s d/m/Y') }}</td>
                                <th>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- DataTables -->
    <script src="{{ asset("/static/backend/AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("/static/backend/AdminLTE-2.4.5/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("/static/backend/js/user/index.js") }}"></script>
@endsection