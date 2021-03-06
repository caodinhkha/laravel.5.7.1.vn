@extends('layouts.backend.auth')

@section('content')
<div class="login-box-body">
<p class="login-box-msg">{{ __('Login') }}</p>

<form action="{{ route('login') }}" method="post">
    @csrf
  <div class="form-group has-feedback">
    <input id="email" type="email" placeholder="{{ __('Email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>
  <div class="row">
    <div class="col-xs-8">
      <div class="checkbox icheck">
        <label>
          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          {{ __('Remember Me') }}
        </label>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-xs-4">
      <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
    </div>
    <!-- /.col -->
  </div>
</form>
<!--<div class="social-auth-links text-center">
  <p>- OR -</p>
  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
    Facebook</a>
  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
    Google+</a>
</div>-->
<!-- /.social-auth-links -->
<!--<a class="text-center" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a><br>
<a class="text-center" href="{{ route('register') }}">{{ __('Register') }}</a>-->
</div>
<!-- /.login-box-body -->
@endsection
