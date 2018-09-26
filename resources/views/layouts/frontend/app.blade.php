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
    <link rel="stylesheet" href="{{ asset("/static/library/AdminLTE-2.4.5/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("/static/library/AdminLTE-2.4.5/bower_components/font-awesome/css/font-awesome.min.css") }}">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="{{ asset("/static/frontend/css/pushy.css") }}">
    <link rel="stylesheet" href="{{ asset("/static/frontend/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("/static/frontend/css/slick-theme.css") }}">
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
                <li class="pushy-link"><a href="#">Trang chủ</a></li>
                <li class="pushy-link"><a href="#">Giới thiệu</a></li>
                <li class="pushy-submenu">
                    <a href="#">Thời trang nam</a>
                    <ul>
                        <li class="pushy-link"><a href="#">Quần</a></li>
                        <li class="pushy-link"><a href="#">Áo</a></li>
                        <li class="pushy-link end"><a href="#">Phụ kiện</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <a href="#">Thời trang nữ</a>
                    <ul>
                        <li class="pushy-link"><a href="#">Quần</a></li>
                        <li class="pushy-link"><a href="#">Áo</a></li>
                        <li class="pushy-link end"><a href="#">Phụ kiện</a></li>
                    </ul>
                </li>
                <li class="pushy-link"><a href="#">Khuyến mãi</a></li>
                <li class="pushy-link"><a href="#">Hướng dẫn</a></li>
                <li class="pushy-link"><a href="#">Tin tức</a></li>
                <li class="pushy-link"><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </nav>
    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    <!-- Your Content -->
    <div id="container">
        <!-- section -->
        <div class="section mobile-menu">
            <header id="header">
                <!-- Menu Button -->
                <i class="menu-btn fa fa-bars"></i>
                <img height="50px" src="http://thoitrangsaigon.vn/static/fe/images/mobile_logo.png">
            </header>
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section desktop-menu">
            <div class="container banner-content">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!--<li><a class="title_mobile_700_18 clshome" href="http://thoitrangsaigon.vn" title="Trang chủ"><i class="fa fa-2x fa-home home" aria-hidden="true"></i></a></li>-->
                        <li><a href="http://thoitrangsaigon.vn" title="Trang chủ">Trang chủ</a></li>
                        <li><a href="http://thoitrangsaigon.vn" title="Trang chủ">Giới thiệu</a></li>
                        <li>
                            <a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao" title="Giới sao">Thời trang nam</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/trong-nuoc" title="Trong nước">Quần</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Áo</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Phụ kiên</a></li>
                            </ul>
                        </li>
                        <li>
                            <a  href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao" title="Giới sao">Thời trang nữ</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/trong-nuoc" title="Trong nước">Quần</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Áo</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Phụ kiên</a></li>
                            </ul>
                        </li>
                        <li><a href="http://thoitrangsaigon.vn/tin-tuc/video" title="Video">Khuyến mãi</a></li>
                        <li><a href="http://thoitrangsaigon.vn/tin-tuc/video" title="Video">Hướng dẫn</a></li>
                        <li><a href="https://www.facebook.com/AdevaDongNai.Vn/" title="Shop">Tin tức</a></li>
                        <li><a href="https://www.facebook.com/AdevaDongNai.Vn/" title="Shop">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section content-wrapper">
            <div class="container banner-content">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset("/static/frontend/img/banner01.jpg") }}" alt="">
                        <!--<div class="banner-caption text-center">
                            <h1 class="primary-color">Bags sale</h1>
                            <h3 class="white-color font-weak">Up to 50% Discount</h3>
                        </div>-->
                    </div>
                    <!-- /banner -->
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset("/static/frontend/img/banner02.jpg") }}" alt="">
                        <!--<div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                        </div>-->
                    </div>
                    <!-- /banner -->
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset("/static/frontend/img/banner03.jpg") }}" alt="">
                        <!--<div class="banner-caption">
                            <h1 class="primary-color">New Product <span>Collection</span></h1>
                        </div>-->
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- banner -->
                    <div class="col-md-8">
                        <div class="banner banner-1">
                            <img src="{{ asset("/static/frontend/img/banner13.jpg") }}" alt="">
                            <div class="banner-caption text-center">
                                <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                                <button class="primary-btn">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="col-md-4 col-sm-6">
                        <a class="banner banner-1" href="#">
                            <img src="{{ asset("/static/frontend/img/banner11.jpg") }}" alt="">
                            <div class="banner-caption text-center">
                                <h2 class="white-color">NEW COLLECTION</h2>
                            </div>
                        </a>
                    </div>
                    <!-- /banner -->

                    <!-- banner -->
                    <div class="col-md-4 col-sm-6">
                        <a class="banner banner-1" href="#">
                            <img src="{{ asset("/static/frontend/img/banner12.jpg") }}" alt="">
                            <div class="banner-caption text-center">
                                <h2 class="white-color">NEW COLLECTION</h2>
                            </div>
                        </a>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Sản phẩm vừa ra mắt</h2>
                        </div>
                    </div>
                    <!-- section title -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product01.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="primary-btn add-to-cart"><a href=""><i class="fa fa-shopping-cart"></i> Mua hàng</button></a>
                                    <button class="primary-btn add-to-cart"><a href=""><i class="fa fa fa-info"></i> Xem chi tiết</button></a>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product02.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product03.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product04.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <img width="100%" src="{{ asset("/static/frontend/img/bg_banner.png") }}" alt="">
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Khuyến mãi</h2>
                        </div>
                    </div>
                    <!-- section title -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product01.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product02.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product03.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product04.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container bg-payment">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 bg-one">
                        <h1 class="one"><a href="">Thanh toán khi nhận hàng</a></h1>
                        <div class="content">
                            Quý khách có thể thanh toán tiền mặt trực tiếp khi mua hàng tại cửa hàng, chuyển khoản, hoặc thanh toán cho nhân viên chuyển phát đối với hình thức chuyển phát COD khi mua hàng trực tuyến qua website www.saigonfashion.net
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 bg-two">
                        <h1 class="two"><a href="">Giao hàng toàn quốc</a></h1>
                        <div class="content">
                            Thời Trang Sài Gòn hỗ trợ phương thức giao hàng và thu tiền tận nơi trên toàn quốc, trừ một số trường hợp đặc biệt như sau:<br>
                            1. Đối với khách hàng ở TPHCM: Trường hợp khách hàng muốn mua sỉ, phải thanh toán 100% tiền hàng trước.<br>
                            2. Đối với khách hàng ở tỉnh thành khác:<br>
                            - Khách hàng mua sỉ sản phẩm, phải chuyển khoảng 100% tiền hàng + phí vận chuyển.<br>
                            - Khách hàng ở các vùng xa xôi, hải đảo, nhân viên Bưu Điện không thể phát tận nơi, vui lòng đến địa chỉ Bưu Điện được thông báo để nhận hàng.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 bg-three">
                        <h1 class="three"><a href="">Đổi trả trong vòng 7 ngày</a></h1>
                        <div class="content">Điều kiện về thời gian đổi trả: trong vòng 7 ngày kể từ khi nhận được hàng.</div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Xu hướng mới</h2>
                        </div>
                    </div>
                    <!-- section title -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product01.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product02.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product03.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product04.jpg") }}" alt="">
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Mua hàng</button>
                                </div>
                            </div>
                            <div class="product-body">
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                <h3 class="product-price">300.000 VND</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->

        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="news container">
                <!-- row -->
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Tin tức & sự kiện</h2>
                        </div>
                    </div>
                    <!-- section title -->

                    <!-- Product Single -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h1 class="news-title"><a href="#">Đầm sơ mi kiểu cách cho nàng yêu vẻ đẹp cổ điển</a></h1>
                                <h2 class="news-desc">Từ hình ảnh thanh nhã của mẫu đầm sơ mi, nhà thiết kế Nguyễn Hà Nhật Huy đã mang tới bộ sưu tập váy đi tiệc nhẹ mùa hè 2018.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h1 class="news-title"><a href="#">Đầm sơ mi kiểu cách cho nàng yêu vẻ đẹp cổ điển</a></h1>
                                <h2 class="news-desc">Từ hình ảnh thanh nhã của mẫu đầm sơ mi, nhà thiết kế Nguyễn Hà Nhật Huy đã mang tới bộ sưu tập váy đi tiệc nhẹ mùa hè 2018.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h1 class="news-title"><a href="#">Đầm sơ mi kiểu cách cho nàng yêu vẻ đẹp cổ điển</a></h1>
                                <h2 class="news-desc">Từ hình ảnh thanh nhã của mẫu đầm sơ mi, nhà thiết kế Nguyễn Hà Nhật Huy đã mang tới bộ sưu tập váy đi tiệc nhẹ mùa hè 2018.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h1 class="news-title"><a href="#">Đầm sơ mi kiểu cách cho nàng yêu vẻ đẹp cổ điển</a></h1>
                                <h2 class="news-desc">Từ hình ảnh thanh nhã của mẫu đầm sơ mi, nhà thiết kế Nguyễn Hà Nhật Huy đã mang tới bộ sưu tập váy đi tiệc nhẹ mùa hè 2018.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h1 class="news-title"><a href="#">Đầm sơ mi kiểu cách cho nàng yêu vẻ đẹp cổ điển</a></h1>
                                <h2 class="news-desc">Từ hình ảnh thanh nhã của mẫu đầm sơ mi, nhà thiết kế Nguyễn Hà Nhật Huy đã mang tới bộ sưu tập váy đi tiệc nhẹ mùa hè 2018.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="http://thoitrangsaigon.vn/static/uploads/thumbnails/thumbs/2018/05/dam-so-mi-kieu-cach-cho-nang-yeu-ve-dep-co-dien-1527471275_490x294.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h1 class="news-title"><a href="#">Đầm sơ mi kiểu cách cho nàng yêu vẻ đẹp cổ điển</a></h1>
                                <h2 class="news-desc">Từ hình ảnh thanh nhã của mẫu đầm sơ mi, nhà thiết kế Nguyễn Hà Nhật Huy đã mang tới bộ sưu tập váy đi tiệc nhẹ mùa hè 2018.</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row footer-content">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="logo-footer-content"><div id="cmsblock-25" class="cmsblock">

                                <div class="description"><a href="#"><img alt="" src="http://cherrykids.vn/image/catalog/demo/logo-footer.png"></a></div>
                            </div>
                        </div>
                        <div class="short_about_us">
                            <p>Cherry Kids nơi thiên thần nhỏ của bạn lung linh tỏa sáng</p>
                        </div>
                        <div class="social-content">
                            <a href="https://www.facebook.com/Cherry.Bao.Ngoc.Kids"><span class="social-icon"><i class="fa fa-facebook"></i></span></a>
                            <a href="https://twitter.com/ttsgnews"><span class="social-icon"><i class="fa fa-twitter"></i></span></a>
                            <a href="https://www.youtube.com/channel/UCUY7Q9JxvQJsBfJZa3tTRJw"><span class="social-icon"><i class="fa fa-youtube"></i></span></a>
                            <a href="https://plus.google.com/u/0/+ThoitrangsaigonVn"><span class="social-icon"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-static-title"><h5>Thông tin</h5></div>
                        <ul class="list-unstyled">
                            <li><a href="http://cherrykids.vn/index.php?route=information/contact">Liên hệ</a></li>
                            <li><a href="http://cherrykids.vn/gioi-thieu">Giới thiệu</a></li>
                            <li><a href="http://cherrykids.vn/thong-tin-giao-hang">Thông tin giao hàng</a></li>
                            <li><a href="http://cherrykids.vn/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                            <li><a href="http://cherrykids.vn/dieu-khoan">Điều khoản &amp; điều kiện</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-static-title"><h5>Liên hệ</h5></div>
                        <div class="list-unstyled contact-us-content">
                            <div class="contact-list">
                                <i class="fa fa-map-marker"></i>
                                <p> <span class="color-title"></span> 506 Nơ Trang Long, Phường 13, Quận Bình Thanh, TP Hồ Chí Minh</p>
                            </div>
                            <div class="contact-list">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <span class="color-title">Email: cherrykidsvn@gmail.com</span>
                                    <br>
                                    <span class="color-title">Website:  http://cherrykids.vn</span>
                                </p>
                            </div>
                            <div class="contact-list">
                                <i class="fa fa-phone"></i>
                                <p>
                                    <span class="color-title">Phone: 0933566089</span>
                                    <br>
                                    <span class="color-title">Fax: 0933566089</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-static-title"><h5>Thư thông báo</h5></div>
                        <span>Đăng ký nhận thông tin sản phẩm mới &amp; chương trình khuyến mãi của Cherry Kids</span>
                        <div class="newletter-subscribe">
                            <div id="boxes" class="newletter-container">
                                <div style="" id="dialog" class="window">
                                    <div class="box">
                                        <!--  <div class="newletter-title"><h2>Newsletter</h2></div> -->
                                        <div class="box-content newleter-content">
                                            <!-- <label>Sign Up for Our Newsletter:</label> -->
                                            <div id="frm_subscribe">
                                                <form name="subscribe" id="subscribe">
                                                    <table>
                                                        <tbody><tr>
                                                            <td><!-- <span class="required">*</span><span>Email</span> --><input type="text" value="" name="subscribe_email" id="subscribe_email">
                                                                <input type="hidden" value="" name="subscribe_name" id="subscribe_name"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a class="button" onclick="email_subscribe()"><span>Đăng ký</span></a>

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div><!-- /#frm_subscribe -->
                                            <div id="notification"></div>
                                        </div><!-- /.box-content -->
                                    </div>
                                </div>
                                <div style="width: 2000px;top:-808px; height: 2000px; display: none; opacity: 0.7;" id="mask"> </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </div>
            </div>
            <div class="container text-powered">
                Copyright @ 2018 by <a href="https://www.facebook.com/phongtx">PhongTX</a>
            </div>
        </footer>
        <!-- /FOOTER -->
    </div>
    <a id="to_top" href="javascript:;" style="display: inline;"><i class="fa fa-angle-up"></i></a>
</body>
<!-- jQuery 3 -->
<script src="{{ asset("/static/library/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("/static/library/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!--pushy.js-->
<script src="{{ asset("/static/frontend/js/pushy.js") }}"></script>
<!--slick.min.js-->
<script src="{{ asset("/static/frontend/js/slick.min.js") }}"></script>
<!--index.js-->
<script src="{{ asset("/static/frontend/js/main.js") }}"></script>
</html>