@extends('layouts.backend.app')
@section('title', '| Update Permission')
@section('content')
    <div class="row">
        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}
        <div class="col-xs-9">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Permission Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>
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