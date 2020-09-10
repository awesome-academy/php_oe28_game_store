<!Doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ trans('text.app.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('images/favicon.ico') }}" type="img/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/qanto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bauhaus93.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
<div id="main-wrapper">
   
    <header class="header header-static bg-black header-sticky">
        <div class="default-header menu-right">
            <div class="container container-1520">
                <div class="row">
                    
                    <div class="col-12 col-md-3 col-lg-3 order-md-1 order-lg-1 mt-20 mb-20">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-md-3 order-lg-2 d-flex justify-content-center">
                        <nav class="main-menu menu-style-2">
                            <ul>
                                <li><a href="games.html">{{ trans('text.app.games') }}</a></li>
                                <li><a href="video.html">{{ trans('text.app.videos') }}</a></li>
                                <li><a href="forum.html">{{ trans('text.app.blogs') }}</a></li>
                                <li><a href="forum.html">{{ trans('text.app.cart') }}</a></li>
                                <li><a href="contact.html">{{ trans('text.app.contact') }}</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-12 col-md-9 order-md-2 order-lg-3 col-lg-3">
                        <div class="header-right-wrap">
                            <ul>
                                <li><a href="login.html">{{ trans('text.app.login') }}</a></li>
                                <li><a href="register.html">{{ trans('text.app.register') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-12 d-flex d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    
    @yield('content')
    
    <footer class="footer-section style-2 section bg-theme">
       
        <div class="footer-top section pt-80 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-80 pb-lg-70 pb-md-60 pb-sm-15 pb-xs-40">
            <div class="container container-1520">
                <div class="row justify-content-lg-between">
                    
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-9">
                        <div class="footer-widget">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="#">{{ trans('text.app.blogs') }}</a></li>
                                        <li><a href="#">{{ trans('text.app.cart') }}</a></li>
                                        <li><a href="#">{{ trans('text.app.support') }}</a></li>
                                        <li><a href="#">{{ trans('text.app.terms&conditions') }}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="footer-widget">
                            <div class="footer-social">
                               <span>{{ trans('text.app.follow_us') }}:</span>
                                <ul>
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
     </footer>
    
</div>

<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>