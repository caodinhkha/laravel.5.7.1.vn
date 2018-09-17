@extends('layouts.app')
@section('title', '| Create Permission')
@section('content')
    <div class="row">
        {!! Form::open(['method' => 'POST', 'route' => ['permissions.store'] ]) !!}
        <div class="col-xs-9">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div><br>
                    @if(!$roles->isEmpty())
                        <h3>Assign Permission to Roles</h3>
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                        @endforeach
                    @endif
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