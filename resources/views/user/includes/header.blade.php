<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Christian Gym</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo">
                    <a href="./index.html">
                        <img src="{{ asset('img/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-flex justify-content-center">
                <nav class="nav-menu d-flex justify-content-center">
                    <ul class="d-flex justify-content-center">
                        <li class="active"><a href="/">Trang Chủ</a></li>
                        <li><a href="/about-us">Giới Thiệu</a></li>
                        <li><a href="/excatelist">Danh Mục Khóa Học</a></li>
                        <li><a href="/coachlist">Huấn Luyện Viên</a></li>
                        @if(Auth::check())
                        <li><a href="">{{Auth::user()->name}}</a>
                            <ul class="dropdown">
                                <li><a href="/urex">Khóa học của bạn</a></li>
                                <li><a href="/user/profile">Hồ sơ của bạn</a></li>
                            </ul>
                        </li>
                        <li><a href="/logout">Đăng xuất</a></li>
                        @else
                        <li><a href="/login">Đăng nhập</a>
                        </li>
                        <li><a href="">Đăng ký</a>
                            <ul class="dropdown">
                                <li><a href="/register">Đăng ký thành viên</a></li>
                                <li><a href="/coachregister">Đăng ký làm hlv</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>