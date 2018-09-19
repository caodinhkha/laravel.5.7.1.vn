<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset("/static/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("/static/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css") }}">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="{{ asset("/static/frontend/css/pushy.css") }}">
    <link rel="stylesheet" href="{{ asset("/static/frontend/css/style.css") }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Pushy Menu -->
    <nav class="pushy pushy-left">
        <div class="pushy-content">
            <ul>
                <li class="pushy-link"><a href="#">Trang chủ<i class="fa fa-angle-right pull-right"></i></a></li>
                <li class="pushy-link"><a href="#">Giới thiệu<i class="fa fa-angle-right pull-right"></i></a></li>
                <li class="pushy-submenu">
                    <a href="#">Nam<i class="fa fa-plus pull-right"></i></a>
                    <ul>
                        <li class="pushy-link"><a href="#">Quần<i class="fa fa-angle-right pull-right"></i></a></li>
                        <li class="pushy-link"><a href="#">Áo<i class="fa fa-angle-right pull-right"></i></a></li>
                        <li class="pushy-link"><a href="#">Phụ kiện<i class="fa fa-angle-right pull-right"></i></a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <a href="#">Nữ<i class="fa fa-plus pull-right"></i></a>
                    <ul>
                        <li class="pushy-link"><a href="#">Quần<i class="fa fa-angle-right pull-right"></i></a></li>
                        <li class="pushy-link"><a href="#">Áo<i class="fa fa-angle-right pull-right"></i></a></li>
                        <li class="pushy-link"><a href="#">Phụ kiện<i class="fa fa-angle-right pull-right"></i></a></li>
                    </ul>
                </li>
                <li class="pushy-link"><a href="#">Giảm giá<i class="fa fa-angle-right pull-right"></i></a></li>
                <li class="pushy-link"><a href="#">Tin tức<i class="fa fa-angle-right pull-right"></i></a></li>
                <li class="pushy-link"><a href="#">Liên hệ<i class="fa fa-angle-right pull-right"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    <!-- Your Content -->
    <div id="container">
        <div class="section">
            <header id="header">
                <!-- Menu Button -->
                <i class="menu-btn fa fa-bars"></i>
                <img height="50px" src="http://thoitrangsaigon.vn/static/fe/images/mobile_logo.png">
            </header>
        </div>
        <div class="section">
            <div class="container">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!--<li><a class="title_mobile_700_18 clshome" href="http://thoitrangsaigon.vn" title="Trang chủ"><i class="fa fa-2x fa-home home" aria-hidden="true"></i></a></li>-->
                        <li><a class="title_mobile_700_18" href="http://thoitrangsaigon.vn" title="Trang chủ">Trang chủ</a></li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao" title="Giới sao">Giới sao</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/trong-nuoc" title="Trong nước">Trong nước</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Quốc tế</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/lam-dep" title="Làm đẹp">Làm đẹp</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/trang-diem" title="Trang điểm">Trang điểm</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/cham-soc-da" title="Chăm sóc da">Chăm sóc da</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/mat-dep" title="Mắt đẹp">Mắt đẹp</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/duong-moi" title="Dưỡng môi">Dưỡng môi</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/toc-dep" title="Tóc đẹp">Tóc đẹp</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/tri-mun" title="Trị mụn">Trị mụn</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/tri-seo" title="Trị sẹo">Trị sẹo</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/tri-nam" title="Trị nám">Trị nám</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/nguc-dep" title="Ngực đẹp">Ngực đẹp</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/tam-trang-tay-long" title="Tắm trắng - tẩy lông">Tắm trắng - tẩy lông</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/the-duc-tham-my" title="Thể dục thẩm mỹ">Thể dục thẩm mỹ</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/nuoc-hoa-my-pham" title="Nước hoa - mỹ phẩm">Nước hoa - mỹ phẩm</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/lam-dep/lam-dep-sau-sinh" title="Làm đẹp sau sinh">Làm đẹp sau sinh</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/bo-suu-tap" title="Bộ sưu tập">Bộ sưu tập</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/bo-suu-tap/thoi-trang-nam" title="Thời trang nam">Thời trang nam</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/bo-suu-tap/thoi-trang-nu" title="Thời trang nữ">Thời trang nữ</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/bo-suu-tap/thoi-trang-han-quoc" title="Thời trang Hàn Quốc">Thời trang Hàn Quốc</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/bo-suu-tap/gai-xinh" title="Gái xinh">Gái xinh</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/phong-cach" title="Phong cách">Phong cách</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-cong-so" title="Thời trang công sở">Thời trang công sở</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-da-ngoai" title="Thời trang dã ngoại">Thời trang dã ngoại</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-di-bien" title="Thời trang đi biển">Thời trang đi biển</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-tet" title="Thời trang tết">Thời trang tết</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-cuoi-hoi" title="Thời trang cưới hỏi">Thời trang cưới hỏi</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-bau" title="Thời trang bầu">Thời trang bầu</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-cho-be" title="Thời trang cho bé">Thời trang cho bé</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phong-cach/thoi-trang-noi-y" title="Thời trang nội y">Thời trang nội y</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/xu-huong" title="Xu hướng">Xu hướng</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/xu-huong/he-thu" title="Hè thu">Hè thu</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/xu-huong/thu-dong" title="Thu đông">Thu đông</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/xu-huong/xuan-he" title="Xuân hè">Xuân hè</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/phu-kien" title="Phụ kiện">Phụ kiện</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/phu-kien/giay-dep-nu" title="Giầy dép nữ">Giầy dép nữ</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phu-kien/giay-dep-nam" title="Giầy dép nam">Giầy dép nam</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phu-kien/tui-xach" title="Túi xách">Túi xách</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phu-kien/dong-ho-nu" title="Đồng hồ nữ">Đồng hồ nữ</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/phu-kien/dong-ho-nam" title="Đồng hồ nam">Đồng hồ nam</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/chu-diem" title="Chủ điểm">Chủ điểm</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/chu-diem/lang-mot" title="Làng mốt">Làng mốt</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/chu-diem/sao-dep-sao-xau" title="Sao đẹp - Sao xấu">Sao đẹp - Sao xấu</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/chu-diem/goc-tieu-dung" title="Góc tiêu dùng">Góc tiêu dùng</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="title_mobile_700_18" href="http://thoitrangsaigon.vn/tin-tuc/video" title="Video">Video</a>
                        </li>
                        <li><a class="title_mobile_700_18" href="https://www.facebook.com/AdevaDongNai.Vn/" title="Shop">Mua sắm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery 3 -->
<script src="{{ asset("/static/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("/static/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!--index.js-->
<script src="{{ asset("/static/frontend/js/pushy.js") }}"></script>
</html>
