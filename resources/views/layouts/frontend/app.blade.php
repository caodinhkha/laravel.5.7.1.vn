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
                    <a href="#">Nam</a>
                    <ul>
                        <li class="pushy-link"><a href="#">Quần</a></li>
                        <li class="pushy-link"><a href="#">Áo</a></li>
                        <li class="pushy-link end"><a href="#">Phụ kiện</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu">
                    <a href="#">Nữ</a>
                    <ul>
                        <li class="pushy-link"><a href="#">Quần</a></li>
                        <li class="pushy-link"><a href="#">Áo</a></li>
                        <li class="pushy-link end"><a href="#">Phụ kiện</a></li>
                    </ul>
                </li>
                <li class="pushy-link"><a href="#">Giảm giá</a></li>
                <li class="pushy-link"><a href="#">Tin tức</a></li>
                <li class="pushy-link"><a href="#">Liên hệ</a></li>
            </ul>
        </div>
    </nav>
    <!-- Site Overlay -->
    <div class="site-overlay"></div>
    <!-- Your Content -->
    <div id="container">
        <div class="section mobile-menu">
            <header id="header">
                <!-- Menu Button -->
                <i class="menu-btn fa fa-bars"></i>
                <img height="50px" src="http://thoitrangsaigon.vn/static/fe/images/mobile_logo.png">
            </header>
        </div>
        <div class="section desktop-menu">
            <div class="container">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!--<li><a class="title_mobile_700_18 clshome" href="http://thoitrangsaigon.vn" title="Trang chủ"><i class="fa fa-2x fa-home home" aria-hidden="true"></i></a></li>-->
                        <li><a href="http://thoitrangsaigon.vn" title="Trang chủ">Trang chủ</a></li>
                        <li><a href="http://thoitrangsaigon.vn" title="Trang chủ">Giới thiệu</a></li>
                        <li>
                            <a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao" title="Giới sao">Nam</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/trong-nuoc" title="Trong nước">Quần</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Áo</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Phụ kiên</a></li>
                            </ul>
                        </li>
                        <li>
                            <a  href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao" title="Giới sao">Nữ</a>
                            <ul class="dropdown-menu sub-ul">
                                <li class="first"><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/trong-nuoc" title="Trong nước">Quần</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Áo</a></li>
                                <li><a href="http://thoitrangsaigon.vn/tin-tuc/gioi-sao/quoc-te" title="Quốc tế">Phụ kiên</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="http://thoitrangsaigon.vn/tin-tuc/video" title="Video">Giảm giá</a>
                        </li>
                        <li><a href="https://www.facebook.com/AdevaDongNai.Vn/" title="Shop">Tin tức</a></li>
                        <li><a href="https://www.facebook.com/AdevaDongNai.Vn/" title="Shop">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section content-wrapper">
            <div class="container">
                <!-- home slick -->
                <div id="home-slick">
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset("/static/frontend/img/banner01.jpg") }}" alt="">
                        <div class="banner-caption text-center">
                            <h1 class="primary-color">Bags sale</h1>
                            <h3 class="white-color font-weak">Up to 50% Discount</h3>
                        </div>
                    </div>
                    <!-- /banner -->
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset("/static/frontend/img/banner02.jpg") }}" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
                        </div>
                    </div>
                    <!-- /banner -->
                    <!-- banner -->
                    <div class="banner banner-1">
                        <img src="{{ asset("/static/frontend/img/banner03.jpg") }}" alt="">
                        <div class="banner-caption">
                            <h1 class="primary-color">New Product <span>Collection</span></h1>
                        </div>
                    </div>
                    <!-- /banner -->
                </div>
                <!-- /home slick -->
            </div>
        </div>
        <!-- section -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- banner -->
                    <div class="col-md-4 col-sm-6">
                        <a class="banner banner-1" href="#">
                            <img src="{{ asset("/static/frontend/img/banner10.jpg") }}" alt="">
                            <div class="banner-caption text-center">
                                <h2 class="white-color">NEW COLLECTION</h2>
                            </div>
                        </a>
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
                    <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
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
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product02.jpg") }}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product03.jpg") }}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->

                    <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <img src="{{ asset("/static/frontend/img/product04.jpg") }}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">$32.50</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
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