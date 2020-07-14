<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/images/favicon.ico') !!}">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{!! asset('assets/css/icofont.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/animate.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/chosen.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/slick.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/meanmenu.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/chosen.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/plugins/jquery-ui.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/shortcode/default.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/OwlCarousel/dist/assets/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/OwlCarousel/dist/assets/owl.theme.default.min.css') !!}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{!! asset('assets/css/shortcode/header.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/shortcode/slider.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/shortcode/footer.css') !!}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{!! asset('assets/css/responsive.css') !!}">

    <!-- Modernizr JS -->
    <script src="{!! asset('assets/js/vendor/modernizr-2.8.3.min.js') !!}"></script>

    <link rel="stylesheet" href="{!! asset('assets/css/custom.css?v=1.0') !!}">
    @yield('page-style')
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- Start of header area -->
    <header class="header-area">
        <div class="header-top navy-bg ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-info">
                            <ul>
                                <li>
                                    <a href="tel:++234 814 690 5211">
                                        <i class="icofont icofont-ui-call"></i>
                                        Call  +234 814 690 5211
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto: lavoguebizsch@gmail.com">
                                        <i class="icofont icofont-envelope"></i>
                                        lavoguebizsch@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <div class="header-top-right f-right">
                            <div class="header-top-social f-right">
                                <p>Follow Us :</p>
                                <ul>
                                    <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont icofont-social-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom stick-h2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="{!! route('home') !!}"><img style="width: 50px;" src="{!! asset('assets/images/logo/logo.jpg') !!}" alt=""> </a>
                        </div>
                    </div>
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <div class="menu-area f-right">
                            <nav>
                                <ul>
                                    <li class="@yield('home_active')"><a href="{!! route('home') !!}"> HOME  </a></li>
                                    <li class="@yield('about_active')"><a href="{!! route('about') !!}"> ABOUT US  </a></li>
                                    {{--<li class="@yield('contact_active')"><a href="{!! route('contact_us') !!}"> Contact US  </a></li>--}}
                                    <li class="@yield('affiliate_active')"><a href="{!! route('affiliates') !!}"> Affiliate Programs </a></li>
                                    <li class="@yield('register_active')"><a href="{!! route('register') !!}"> Register Now</a></li>
                                    <li class="@yield('news_active')"><a href="{!! route('events') !!}">News & Events </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile-menu-area start -->

    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>

                                <li class="@yield('home_active')"><a href="{!! route('home') !!}">HOME  </a></li>
                                <li class="@yield('about_active')"><a href="{!! route('about') !!}">ABOUT US  </a></li>
                                <li class="@yield('contact_active')"><a href="{!! route('contact_us') !!}"> Contact US  </a></li>
                                <li class="@yield('affiliate_active')"><a href="{!! route('affiliates') !!}">Affiliate Programs </a></li>
                                <li class="@yield('register_active')"><a href="{!! route('register') !!}"> Register Now</a></li>
                                <li class="@yield('news_active')"><a href="{!! route('events') !!}">News & Events </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile-menu-area end -->
    <!-- End of header area -->
    @if(Session::has('success'))
        <div class="alert alert-success text-center">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{!! Session::get('success') !!}</strong>
        </div>
    @endif

    <!-- Start page content -->

@yield('page-content')

<!-- End page content -->


    <!-- Start footer area -->
    <footer class="footer-area">
        <div class="footer-top ptb-110 navy-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-logo-address">
                            <div class="footer-logo">
                                <a href="#"><img style="height: 60px;" src="{!! asset('assets/images/logo/logo.jpg') !!}" alt="" ></a>
                            </div>
                            <div class="footer-address">
                                <div class="header-top-info">
                                    <ul>
                                        <li>
                                            <a href="tel:++234 814 690 5211">
                                                <i class="icofont icofont-ui-call"></i>
                                                Hotline  +234 814 690 5211
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto: lavoguebizsch@gmail.com">
                                                <i class="icofont icofont-envelope"></i>
                                                lavoguebizsch@gmail.com
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icofont icofont-location-pin"></i>
                                                Suite 55, Lavouge business school ,Dansville plaza, Beside AP filling station, Durumi, Abuja.
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-text">
                            <h3>Courses</h3>
                            <ul class="footer-text-all">
                                <li><a href="#">Certificate in Digital Marketing</a></li>
                                <li><a href="#">Certificate in Website Design and Development</a></li>
                                <li><a href="#">Certificate in Entrepreneurship Studies</a></li>
                                <li><a href="#">Certificate in computer programming</a></li>
                                <li><a href="#">Certificate in computer engineering</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="footer-text mrg-sm3 mrg-xs">
                            <h3>Quick Links</h3>
                            <ul class="footer-text-all">
                                <li class="@yield('home_active')"><a href="{!! route('home') !!}"> Home  </a></li>
                                <li class="@yield('about_active')"><a href="{!! route('about') !!}"> About us  </a></li>
                                {{--<li class="@yield('contact_active')"><a href="{!! route('contact_us') !!}"> Contact US  </a></li>--}}
                                <li class="@yield('affiliate_active')"><a href="{!! route('affiliates') !!}"> Affiliate Programs </a></li>
                                <li class="@yield('register_active')"><a href="{!! route('register') !!}"> Register Now</a></li>
                                <li class="@yield('news_active')"><a href="{!! route('events') !!}">News & Events </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-text mrg-sm3 mrg-xs">
                            <h3>Contact Us</h3>
                            <form action="{{route('contact')}}" method="POST">
                                @csrf
                                <input placeholder="Name*" type="text" name="name">
                                <input class="in-mrg" placeholder="Email*" name="email" type="email">
                                <textarea placeholder="Massage*" name="message"></textarea>
                                <button class="submit" type="submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer-bottom-text ptb-20">
                            <p>
                                Copyrights © 2019 Lavogue Business Schools
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer area -->
    <!-- start scrollUp
    ============================================ -->
    <div id="toTop">
        <i class="fa fa-chevron-up"></i>
    </div>
</div>
<!-- Body main wrapper end -->





<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script src="{!! asset('assets/js/vendor/jquery-1.12.0.min.js') !!}"></script>
<script src="{!! asset('assets/OwlCarousel/dist/owl.carousel.min.js') !!}"></script>
<!-- Bootstrap framework js -->
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!--  ajax-mail.js  -->
<script src="{!! asset('assets/js/ajax-mail.js') !!}"></script>
<!-- All js plugins included in this file. -->
<script src="{!! asset('assets/js/plugins.js') !!}"></script>
<script src="{!! asset('assets/js/main.js') !!}"></script>
@yield('page-script')

</body>

</html>
