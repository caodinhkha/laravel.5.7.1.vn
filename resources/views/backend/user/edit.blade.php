@extends('layouts.backend.app')
@section('title', '| Update User')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
            <div class="col-xs-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group @if ($errors->has('email')) has-error @endif">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', null, array('class' => 'form-control')) }}
                        </div>
                        <h5><b>Assign Role</b></h5>
                        <div class="form-group @if ($errors->has('roles')) has-error @endif">
                            @foreach ($roles as $role)
                                {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                            @endforeach
                        </div>
                        <div class="form-group @if ($errors->has('password')) has-error @endif">
                            {{ Form::label('password', 'Password') }}<br>
                            {{ Form::password('password', array('class' => 'form-control')) }}
                        </div>
                        <div class="form-group @if ($errors->has('password')) has-error @endif">
                            {{ Form::label('password', 'Confirm Password') }}<br>
                            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
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
    </section>
    <!-- /.content -->
@endsection