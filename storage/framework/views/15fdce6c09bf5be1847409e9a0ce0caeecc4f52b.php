<?php $__env->startSection('title', '| Update User'); ?>
<?php $__env->startSection('content'); ?>
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
            <?php echo e(Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT'))); ?>

            <div class="col-xs-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
                            <?php echo e(Form::label('name', 'Name')); ?>

                            <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

                        </div>
                        <div class="form-group <?php if($errors->has('email')): ?> has-error <?php endif; ?>">
                            <?php echo e(Form::label('email', 'Email')); ?>

                            <?php echo e(Form::email('email', null, array('class' => 'form-control'))); ?>

                        </div>
                        <h5><b>Assign Role</b></h5>
                        <div class="form-group <?php if($errors->has('roles')): ?> has-error <?php endif; ?>">
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e(Form::checkbox('roles[]',  $role->id, $user->roles )); ?>

                                <?php echo e(Form::label($role->name, ucfirst($role->name))); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="form-group <?php if($errors->has('password')): ?> has-error <?php endif; ?>">
                            <?php echo e(Form::label('password', 'Password')); ?><br>
                            <?php echo e(Form::password('password', array('class' => 'form-control'))); ?>

                        </div>
                        <div class="form-group <?php if($errors->has('password')): ?> has-error <?php endif; ?>">
                            <?php echo e(Form::label('password', 'Confirm Password')); ?><br>
                            <?php echo e(Form::password('password_confirmation', array('class' => 'form-control'))); ?>

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
                        <?php echo Form::submit('Save', array('class' => 'btn btn-primary')); ?>

                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>