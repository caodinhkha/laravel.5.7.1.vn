@extends('layouts.backend.app')
@section('title', '| Category Management')
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
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Danh mục</h3>

                        <div class="box-tools pull-right">
                            <a href="javascript:;" class="btn btn-add act-add btn-block btn-primary btn-sm" data-id="0" data-type=""
                               data-toggle="modal" data-target="#modal-add">Tạo mới</a>
                        </div>
                    </div>
                    <?php
                    if(isset($categories) && !empty($categories)){
                    ?>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th class="txt-id text-center">ID</th>
                                <th>Tên</th>
                                <th class="txt-id text-center">Thứ tự</th>
                                <th class="txt-action text-center text-nowrap">Thao tác</th>
                            </tr>

                            <?php
                            foreach ($categories as $val) {
                                $numRepeat = $val['level'];
                                $char = '';
                                if ($numRepeat > 0) {
                                    $char .= str_repeat('-----', $numRepeat);
                                }
                                echo '<tr><td class="text-center">'.$val['id'].'</td><td><a href="javascript:;" class="tooltips act-add" data-toggle="tooltip" data-id="' . $val['id'] . '" data-type="" data-toggle="modal" data-target="#modal-add" data-original-title="Edit">'.$char . ' ' . $val['name'].'</a></td><td class="text-center">'.$val['display_order'].'</td><td class="text-center"><a class="tooltips act-add" data-toggle="tooltip" data-id="' . $val['id'] . '" data-type="" data-toggle="modal" data-target="#modal-add" href="javascript:;" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a class="tooltips act-update-status" data-id="'.$val['id'].'" data-name="'.$val['name'].'" data-status="'.$val['status'].'" href="javascript:;" data-toggle="tooltip" data-original-title="'.($val['status']==1?"Inactive":"Active").'"><i class="fa '.($val['status']==1?"fa-lock":"fa-unlock").'"></i></a>&nbsp;&nbsp;&nbsp;<a class="tooltips act-del" data-id="'.$val['id'].'" data-name="'.$val['name'].'" href="javascript:;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a></td></tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    }else{
                    ?>
                    <div class="box-body">
                        <div class="alert alert-warning p-b-10" role="alert">Không tìm thấy dữ liêu!</div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-add" role="dialog" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script src="{{ asset("/static/backend/js/category/index.js") }}"></script>
@endsection