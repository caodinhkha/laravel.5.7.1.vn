<?php $__env->startSection('content'); ?>
<div class="login-box-body">
<p class="login-box-msg"><?php echo e(__('Login')); ?></p>

<form action="<?php echo e(route('login')); ?>" method="post">
    <?php echo csrf_field(); ?>
  <div class="form-group has-feedback">
    <input id="email" type="email" placeholder="<?php echo e(__('Email')); ?>" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
    <?php if($errors->has('email')): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
    <?php endif; ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input id="password" type="password" placeholder="<?php echo e(__('Password')); ?>" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
    <?php if($errors->has('password')): ?>
        <span class="invalid-feedback" role="alert">
            <strong><?php echo e($errors->first('password')); ?></strong>
        </span>
    <?php endif; ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>
  <div class="row">
    <div class="col-xs-8">
      <div class="checkbox icheck">
        <label>
          <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
          <?php echo e(__('Remember Me')); ?>

        </label>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-xs-4">
      <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo e(__('Login')); ?></button>
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
<!--<a class="text-center" href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forgot your password?')); ?></a><br>
<a class="text-center" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>-->
</div>
<!-- /.login-box-body -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.auth', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>