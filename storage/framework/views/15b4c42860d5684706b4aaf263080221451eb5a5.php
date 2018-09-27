<?php $__env->startSection('title', '| Users Management'); ?>
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
                        <h3 class="box-title">Users Management</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="btn-group pull-right">
                            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                                <i class="fa fa-plus"></i> Create
                            </a>
                        </div>
                        <table id="tbl_users" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->created_at->format('H:i:s d/m/Y')); ?></td>
                                    <th>
                                        <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </th>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Full name</th>
                                <th>Email</th>
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
    <script src="<?php echo e(asset("/static/backend/js/user/index.js")); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>