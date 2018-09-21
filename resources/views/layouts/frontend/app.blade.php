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
            <div class="container">
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
            <div class="container">
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
            <div class="container">
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
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
        <!-- FOOTER -->
        <footer id="footer" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row section-grey">
                    <!-- footer widget -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="footer">
                            <!-- footer logo -->
                            <div class="footer-logo">
                                <a class="logo" href="#">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>
                            <!-- /footer logo -->

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

                            <!-- footer social -->
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                            <!-- /footer social -->
                        </div>
                    </div>
                    <!-- /footer widget -->

                    <!-- footer widget -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-header">My Account</h3>
                            <ul class="list-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Compare</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /footer widget -->

                    <div class="clearfix visible-sm visible-xs"></div>

                    <!-- footer widget -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-header">Customer Service</h3>
                            <ul class="list-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Shiping & Return</a></li>
                                <li><a href="#">Shiping Guide</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /footer widget -->

                    <!-- footer subscribe -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-header">Stay Connected</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                            <form>
                                <div class="form-group">
                                    <input class="input" placeholder="Enter Email Address">
                                </div>
                                <button class="primary-btn">Join Newslatter</button>
                            </form>
                        </div>
                    </div>
                    <!-- /footer subscribe -->
                </div>
                <!-- /row -->
                <hr>
                <!-- row -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <!-- footer copyright -->
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <!-- /footer copyright -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </footer>
        <!-- /FOOTER -->
    </div>
</body>
<!-- jQuery 3 -->
<script src="{{ asset("/static/AdminLTE-2.4.5/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset("/static/AdminLTE-2.4.5/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<!--pushy.js-->
<script src="{{ asset("/static/frontend/js/pushy.js") }}"></script>
<!--slick.min.js-->
<script src="{{ asset("/static/frontend/js/slick.min.js") }}"></script>
<!--index.js-->
<script src="{{ asset("/static/frontend/js/index.js") }}"></script>
</html>