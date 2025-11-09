<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>{{ $title }}</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('clients/assets/img/logo/favicon.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/jquery.timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('clients/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <!-- preloader -->
    {{-- <div class="preloader">
        <div class="loader">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <div class="loader-plane"></div>
        </div>
    </div> --}}
    <!-- preloader end -->


    <!-- header area -->
    <header class="header">

        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="header-top-left">
                            <div class="top-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="top-contact-info">
                                <ul>
                                    <li><a href="tel:+21234567897"><i class="far fa-phone-arrow-down-left"></i>+2 123
                                            4567 897</a></li>
                                    <li><a
                                            href="https://live.themewild.com/cdn-cgi/l/email-protection#7b12151d143b1e031a160b171e55181416"><i
                                                class="far fa-envelopes"></i><span class="__cf_email__"
                                                data-cfemail="3c55525a537c59445d514c5059125f5351">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-top-right">
                            <div class="lang">
                                <select name="lang" class="select">
                                    <option value="1">ENG</option>
                                    <option value="2">RUS</option>
                                    <option value="3">ROM</option>
                                    <option value="4">FRA</option>
                                    <option value="5">ESP</option>
                                    <option value="6">POR</option>
                                </select>
                            </div>
                            <div class="currency">
                                <select name="currency" class="select">
                                    <option value="1">USD</option>
                                    <option value="2">EUR</option>
                                    <option value="3">AUD</option>
                                    <option value="4">BRL</option>
                                    <option value="5">CAD</option>
                                    <option value="6">MXN</option>
                                </select>
                            </div>
                           <div class="account">
    @if (session()->has('user'))
        <span class="text-white"><i class="far fa-user"></i> {{ session('user.name') }}</span>
        <a href="{{ route('logout') }}"><i class="far fa-sign-out"></i> Logout</a>
    @else
        <a href="{{ route('login') }}"><i class="far fa-sign-in"></i> Login</a>
        <a href="#"><i class="far fa-user-tie"></i> Sign Up</a>
    @endif
</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top end -->
            <div class="main-navigation">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('clients/assets/img/logo/logo.png') }}" class="logo-display"
                                alt="logo">
                            <img src="{{ asset('clients/assets/img/logo/logo-dark.png') }}" class="logo-scrolled"
                                alt="logo">
                        </a>
                        <div class="mobile-menu-right">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="main_nav">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="{{ route('home') }}"
                                        data-bs-toggle="dropdown">Trang chủ</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="{{ route('home') }}">Trang chủ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('flight') }}"
                                        data-bs-toggle="dropdown">Chuyến bay</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="{{ route('flight') }}">Danh sách chuyến bay</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('flight') }}">Chuyến bay đã đặt</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('hotel') }}"
                                        data-bs-toggle="dropdown">Khách sạn</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="{{ route('hotel') }}">Danh sách khách sạn</a></li>
                                        <li><a class="dropdown-item" href="{{ route('hotel') }}">Khách sạn đã đặt</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('blog') }}"
                                        data-bs-toggle="dropdown">Trang</a>
                                    <div class="dropdown-menu mega-menu fade-down">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('register.index') }}">Đăng ký</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('infor') }}">Tôi</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('login') }}">Đăng nhập</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('blog') }}">Đăng xuất</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('tours') }}"
                                        data-bs-toggle="dropdown">Tour</a>
                                    <ul class="dropdown-menu fade-down">
                                        <li><a class="dropdown-item" href="{{ route('tours') }}">Danh sách tour</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('toursbooking') }}">tour đã đặt</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                            <div class="header-nav-right">
                                <div class="header-btn">
                                    <a href="become-expert.html" class="theme-btn mt-2">Become An Expert</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
