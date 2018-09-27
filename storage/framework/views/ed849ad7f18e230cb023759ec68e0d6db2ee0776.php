<?php $__env->startSection('title', '| Permissions'); ?>
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
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Permissions Management</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="btn-group pull-right">
                            <a href="<?php echo e(route('permissions.create')); ?>" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                                <i class="fa fa-plus"></i> Create
                            </a>
                        </div>
                        <table id="tbl_users" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Permissions</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($permission->id); ?></td>
                                    <td><?php echo e($permission->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('permissions.edit', $permission->id)); ?>" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <?php echo Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]); ?>

                                        <?php echo Form::submit('Delete', ['class' => 'btn btn-icon btn-sm btn-primary', 'data-toggle' => 'tooltip', 'data-original-title' => 'Delete']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Permissions</th>
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
    </section>
    <!-- /.content -->
    <!-- DataTables -->
    <script src="<?php echo e(asset("/static/library/AdminLTE-2.4.5/bower_components/datatables.net/js/jquery.dataTables.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/static/library/AdminLTE-2.4.5/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js")); ?>"></script>
    <script src="<?php echo e(asset("/static/backend/js/permission/index.js")); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>