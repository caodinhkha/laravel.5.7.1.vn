@extends('layouts.app')
@section('title', '| Update Role')
@section('content')
    <div class="row">
        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
        <div class="col-xs-9">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Role Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
                    <h3>Assign Permissions</h3>
                    @foreach ($permissions as $permission)
                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>
                    @endforeach
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 right-sidebar">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Publish</h3>
                </div>
                <div class="box-body">
                    {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.row -->
@endsection