@extends('layouts.backend.app')
@section('title', '| Posts Management')
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
                        <a href="{{ route('posts.create') }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>
                    <table id="tbl_users" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->created_at->format('H:i:s d/m/Y') }}</td>
                                <th>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
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
                            <th>Title</th>
                            <th>Description</th>
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
    <script src="{{ asset("/static/library/AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("/static/library/AdminLTE-2.4.5/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("/static/backend/js/post/index.js") }}"></script>
@endsection