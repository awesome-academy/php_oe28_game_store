<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('page-title', trans('text.app.title'))
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('client/images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/fonts/themify/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/fonts/elegant-font/html-css/style.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/vendor/lightbox2/css/lightbox.min.css">
    @yield('css')
    <link rel="stylesheet" type="text/css" href="bower_components/client/css/util.css">
    <link rel="stylesheet" type="text/css" href="bower_components/client/css/main.css">
</head>
<body class="animsition">
    <header class="header1">
        <div class="container-menu-header">
            <div class="topbar">
                <div class="topbar-social">
                    <a href="{{ config('link.facebook') }}" class="topbar-social-item fa fa-facebook"></a>
                    <a href="{{ config('link.instagram') }}" class="topbar-social-item fa fa-instagram"></a>
                    <a href="{{ config('link.pinterest') }}" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="{{ config('link.youtube') }}" class="topbar-social-item fa fa-youtube-play"></a>
                </div>

                <span class="topbar-child1">
                    {{ trans('text.app.slogan') }} <i class="fa fa-gamepad"></i>
                </span>

                <div class="topbar-child2">
                    <span class="topbar-email">
                        @if (Auth::check())
                            {{ Auth::user()->email }}
                        @endif
                    </span>

                    <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                            <option value="en" @if (config('app.locale') == config('string.en')) {{ 'selected' }} @endif>EN</option>
                            <option value="vi" @if (config('app.locale') == config('string.vi')) {{ 'selected' }} @endif>VI</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="wrap_header">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('client/images/icons/logo2.png') }}" alt="IMG-LOGO">
                </a>

                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li class="sale-noti">
                                <a href="{{ route('games.index') }}">{{ trans('text.app.games') }}</a>
                            </li>

                            <li>
                                <a href="">{{ trans('text.app.videos') }}</a>
                            </li>

                            <li>
                                <a href="">{{ trans('text.app.blogs') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('cart.index') }}">{{ trans('text.app.cart') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-icons">
                    @if (Auth::check())
                        <a href="{{ route('profile.index') }}" class="header-wrapicon1 dis-block">
                            <img src="{{ asset('client/images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
                        </a>

                        <span class="linedivide1"></span>

                        <div class="header-wrapicon2">
                            <img src="{{ asset('client/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="header-wrapicon1 dis-block">
                            {{ trans('text.app.login') }}
                        </a>

                        <span class="linedivide1"></span>

                        <a href="{{ route('register') }}" class="header-wrapicon2">
                            {{ trans('text.app.register') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="wrap_header_mobile">
            <a href="{{ route('home') }}" class="logo-mobile">
                <img src="{{ asset('client/images/icons/logo2.png') }}" alt="IMG-LOGO">
            </a>

            <div class="btn-show-menu">
                <div class="header-icons-mobile">
                    @if (Auth::check())
                        <a href="{{ route('profile.index') }}" class="header-wrapicon1 dis-block">
                            <img src="{{ asset('client/images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
                        </a>

                        <span class="linedivide2"></span>

                        <div class="header-wrapicon2">
                            <img src="{{ asset('client/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        </div>
                    @endif
                </div>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <div class="wrap-side-menu" >
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                            {{ trans('text.app.slogan') }} <i class="fa fa-gamepad"></i>
                        </span>
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            @if (Auth::check())
                                <span class="topbar-email">
                                    {{ Auth::user()->email }}
                                </span>
                            @endif

                            <div class="topbar-language rs1-select2">
                                <select class="selection-1" name="time">
                                    <option value="en" @if (config('app.locale') == config('string.en')) {{ 'selected' }} @endif>EN</option>
                                    <option value="vi" @if (config('app.locale') == config('string.vi')) {{ 'selected' }} @endif>VI</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="{{ config('link.facebook') }}" class="topbar-social-item fa fa-facebook"></a>
                            <a href="{{ config('link.instagram') }}" class="topbar-social-item fa fa-instagram"></a>
                            <a href="{{ config('link.pinterest') }}" class="topbar-social-item fa fa-pinterest-p"></a>
                            <a href="{{ config('link.youtube') }}" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{ route('games.index') }}">{{ trans('text.app.games') }}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a>{{ trans('text.app.videos') }}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a>{{ trans('text.app.blogs') }}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{{ route('cart.index') }}">{{ trans('text.app.cart') }}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <img src="{{ asset('client/images/icons/logo2.png') }}" alt="IMG-LOGO">
                <div>
                    &nbsp;
                </div>

                <div>
                    <p class="s-text7 w-size27">
                        {{ trans('text.app.question') }}
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="{{ config('link.facebook') }}" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="{{ config('link.instagram') }}" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="{{ config('link.pinterest') }}" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="{{ config('link.youtube') }}" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4"></div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    {{ trans('text.app.links') }}
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="{{ route('games.index') }}" class="s-text7">
                            {{ trans('text.app.games') }}
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a class="s-text7">
                            {{ trans('text.app.videos') }}
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a class="s-text7">
                            {{ trans('text.app.blogs') }}
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="{{ route('cart.index') }}" class="s-text7">
                            {{ trans('text.app.cart') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    {{ trans('text.app.help') }}
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a class="s-text7">
                            {{ trans('text.app.history') }}
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a class="s-text7">
                            {{ trans('text.app.refund') }}
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a class="s-text7">
                            {{ trans('text.app.faqs') }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    {{ trans('text.app.newsletter') }}
                </h4>

                <form>
                    <div class="effect1 w-size9">
                        <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                        <span class="effect1-line"></span>
                    </div>

                    <div class="w-size2 p-t-20">
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                            {{ trans('text.app.subcribe') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <div class="t-center p-l-15 p-r-15">
            <a>
                <img class="h-size2" src="{{ asset('client/images/icons/paypal.png') }}" alt="IMG-PAYPAL">
            </a>

            <a>
                <img class="h-size2" src="{{ asset('client/images/icons/visa.png') }}" alt="IMG-VISA">
            </a>

            <a>
                <img class="h-size2" src="{{ asset('client/images/icons/mastercard.png') }}" alt="IMG-MASTERCARD">
            </a>

            <a>
                <img class="h-size2" src="{{ asset('client/images/icons/express.png') }}" alt="IMG-EXPRESS">
            </a>

            <a>
                <img class="h-size2" src="{{ asset('client/images/icons/discover.png') }}" alt="IMG-DISCOVER">
            </a>

            @include('layouts.copyright')
        </div>
    </footer>

    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <div id="dropDownSelect1"></div>

    <script type="text/javascript" src="bower_components/client/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/select2/select2.min.js"></script>
    <script type="text/javascript" src="bower_components/client/js/localization.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="bower_components/client/js/slick-custom.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/countdowntime/countdowntime.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/lightbox2/js/lightbox.min.js"></script>
    <script type="text/javascript" src="bower_components/client/vendor/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="bower_components/client/js/cart.js"></script>
    @yield('js')
    <script src="bower_components/client/js/main.js"></script>
</body>
</html>
