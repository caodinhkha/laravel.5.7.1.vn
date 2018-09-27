<?php $__env->startSection('title', '| Update Role'); ?>
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
            <?php echo e(Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT'))); ?>

            <div class="col-xs-9">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <?php echo e(Form::label('name', 'Role Name')); ?>

                            <?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

                        </div>
                        <h3>Assign Permissions</h3>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(Form::checkbox('permissions[]',  $permission->id, $role->permissions )); ?>

                            <?php echo e(Form::label($permission->name, ucfirst($permission->name))); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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