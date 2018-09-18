@extends('layouts.backend.app')
@section('title', '| Create a user')
@section('content')
    <div class="row">
        {!! Form::open(array('url' => 'users')) !!}
        <div class="col-xs-9">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', '', array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', '', array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group @if ($errors->has('roles')) has-error @endif">
                        @foreach ($roles as $role)
                            {!! Form::checkbox('roles[]',  $role->id ) !!}
                            {!! Form::label($role->name, ucfirst($role->name)) !!}<br>
                        @endforeach
                    </div>
                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('password', 'Password') !!}<br>
                        {!! Form::password('password', array('class' => 'form-control')) !!}
                    </div>
                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('password', 'Confirm Password') !!}<br>
                        {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
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