@extends('layouts.app')
@section('title', '| Roles Management')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Roles Management</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="btn-group pull-right">
                        <a class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>
                    <table id="tbl_users" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                                <td>
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-icon btn-sm btn-primary', 'data-toggle' => 'tooltip', 'data-original-title' => 'Delete']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Role</th>
                            <th>Permissions</th>
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
    <script src="{{ asset("/static/backend/js/users/index.js") }}"></script>
@endsection