@extends('layouts.backend.app')
@section('title', '| Create a post')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <ol class="breadcrumb">
                <li><a href="/backend"><i class="fa fa-th"></i> Dashboard</a></li>
                <li><a href="/backend/posts/status/2" title="Bài viết">Post</a></li>
                <li><a href="/backend/posts/add" title="Tạo bài viết">Create</a></li>
            </ol>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form id="add" enctype="multipart/form-data" accept-charset="utf-8" method="post" action="" role="form">
                <input type="hidden" name="intType" value=""> <!-- 0: Article, 1: Photo, 2: Video -->
                <input type="hidden" name="intImgW" value="0">
                <input type="hidden" name="intImgH" value="0">
                <input type="hidden" name="intCropX" value="0">
                <input type="hidden" name="intCropY" value="0">
                <input type="hidden" name="intZoom" value="0">
                <div class="col-xs-9 form-group frm-validate image-editor">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group frm-validate">
                                <label for="strImage">Hình đại diện</label>
                                <input type="file" accept="image/*" class="cropit-image-input" id="image" name="strImage">
                            </div>
                            <div class="form-group frm-validate">
                                <div class="cropit-preview"></div>
                            </div>
                            <div class="form-group frm-validate">
                                <div class="preview">
                                    <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" height="100px">
                                </div>
                            </div>
                            <div class="form-group frm-validate">
                                <label for="strTitle">Title</label>
                                <input name="strTitle" type="text" value="" class="form-control" id="strTitle">
                            </div>
                            <div class="form-group frm-validate">
                                <label for="strDesc">Description</label>
                                <textarea class="form-control" style="width: 100%;" rows="4" cols="118" name="strDesc" id="strDesc"></textarea>
                            </div>
                            <div class="form-group frm-validate">
                                <label for="strMetaTitle">Meta title</label>
                                <input name="strMetaTitle" type="text" value="" class="form-control" id="strMetaTitle">
                            </div>
                            <div class="form-group frm-validate">
                                <label for="strMetaDesc">Meta description</label>
                                <textarea class="form-control" style="width: 100%;" rows="4" cols="118" name="strMetaDesc" id="strMetaDesc"></textarea>
                            </div>
                            <div class="form-group frm-validate">
                                <label for="strMetaKeyword">Meta keyword</label>
                                <input name="strMetaKeyword" type="text" value="" class="form-control" id="strMetaKeyword">
                            </div>
                            <div class="form-group frm-validate">
                                <label for="ckeditor">Nội dung bài viết</label>
                                <textarea name="ckeditor" id="ckeditor"></textarea>
                            </div>
                            <div class="form-group frm-validate">
                                <label for="strTags">Tags</label>
                                <input name="strTags" type="text" value="" class="form-control" id="strTags">
                            </div>
                            <div class="form-group frm-validate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="intIsComment">Cho user bình luận</label>
                                        <select class="form-control" name="intIsComment">
                                            <option value="1">Có</option>
                                            <option value="0">Không</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group frm-validate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="intCommentType">Loại bình luận</label>
                                        <select class="form-control" name="intCommentType">
                                            <option value="1">Bình luận facebook</option>
                                            <option value="0">Bình luận trên trang</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group frm-validate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="strDate">Thời gian đăng bài</label>
                                        <input name="strDate" type="text" value="" class="form-control" id="strDate">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group frm-validate">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="strMetaKeyword">Status</label>
                                        <select class="form-control" name="intStatus">
                                            <option value="1">Duyệt</option>
                                            <option value="2">Chờ duyệt</option>
                                            <option value="3">Lưu nháp</option>
                                        </select>
                                    </div>
                                </div>
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
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <div class="box-body">
                            <label for="intCate">Danh mục</label>
                            <div class="row" style="max-width:97%;">
                                <table class="table table-bordered table-responsive no-padding" style="margin-bottom: 0px;">
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <label class="error" for="intCate"></label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
@endsection
<!-- ckeditor -->
<script src="{{ asset("/static/library/ckeditor4.10.1/ckeditor.js") }}"></script>
<script>
    CKEDITOR.replace('ckeditor');
</script>