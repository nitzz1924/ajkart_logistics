<!DOCTYPE html>

<html lang="en">

<head>
    <!-- TITLE OF SITE -->
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Convertar - Transport HTML Template for Transportation, Logistics and Shipping Companies" />
    <meta name="keywords"
        content="Convertar, Transport, one page, multipage, responsive, Transportation, Logistics template" />
    <meta name="author" content="Convertar">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/ajfavicon.jpg') }}">

    <!-- CSS Begins
================================================== -->
    <!--Animate Effect-->
    <link href="{{ asset('websiteAssets/css/animate.css') }}"" rel="stylesheet">
    <link href="{{ asset('websiteAssets/css/hover.css') }}" rel="stylesheet">

    <!--Owl Carousel -->
    <link href="{{ asset('websiteAssets/css/owl.carousel.css') }}" rel="stylesheet">

    <!-- For Image Preview -->
    <link rel="stylesheet" href="{{ asset('websiteAssets/css/magnific-popup.css') }}">

    <!--BootStrap -->
    <link href="{{ asset('websiteAssets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('websiteAssets/css/normalize.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('websiteAssets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('websiteAssets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ::::::::::::::::::::::::::: Start: Preloader section ::::::::::::::::::::::::::: -->
    <div id="preloader"></div>
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

    <!-- Start: Header Section
==================================================-->
    <div class="header_top">
        <!-- Logo -->
        <div class="container">
            <div class="row">
                <div class="header_logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/mainlogo.jpg') }}"
                            alt="header_logo">
                    </a>
                </div>
                <div class="header_top_location">
                    <div class="top_location">
                        <i class="icon_pin_alt"></i>
                        <p>England </p>
                        <span>NY 22049</span>
                    </div>
                    <div class="top_location">
                        <i class="icon_mail_alt"></i>
                        <p><a href="https://tidytheme.xyz/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="325f534a72555f535b5e1c515d5f">[email&#160;protected]</a></p>
                        <span>Office Hour : 8AM - 4PM</span>
                    </div>
                </div>
                <div class="header-right">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End: social-nav -->
            </div>
        </div>
    </div>
    <!-- End: Header Info -->

    <!-- Start: header navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div id="navigation">
                    <ul>
                        <li><a href="{{ route('home') }}"
                                class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                  class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                        </li>
                        <li><a href="{{ route('services') }}"
                                  class=" {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
                        </li>
                        <li><a href="{{ route('b2bservice') }}"
                                  class=" {{ request()->routeIs('b2bservice') ? 'active' : '' }}">B2B Service</a>
                        </li>
                        <li><a href="{{ route('contactus') }}"
                                  class=" {{ request()->routeIs('contactus') ? 'active' : '' }}"
                                title="Contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('userloginpage') }}" class="header_quate_right"> Login </a>
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </div>
    <!-- End: header navigation -->

    <div class="website-content">
        @yield('content')
    </div>

    <!-- Start:Footer Section
==================================================-->
    <footer class="footer-section">
        <div class="container">
            <div class="row footer_top">
                <div class="footer_contact col-md-3 col-xs-12 col-sm-12">
                    <a href="#" class="footer-logo"><img src="{{ asset('assets/images/mainlogo.png') }}"
                            alt="Footer Logo"></a>
                </div>
                <div class="footer_contact col-md-3 col-xs-12 col-sm-12"><i class="icon_pin_alt"></i>
                    <p>Address : company name </p>
                    <h4>California, USA</h4>
                </div>
                <div class="footer_contact col-md-3 col-xs-12 col-sm-12"><i class="icon_phone"></i>
                    <p>Toll Free Number</p>
                    <h4>0 (245) 378-6748</h4>
                </div>
                <div class="footer_contact col-md-3 col-xs-12 col-sm-12"><i class="icon_clock_alt"></i>
                    <p>Opening Hours</p>
                    <h4>Mon - Fri 9am - 6 pm</h4>
                </div>
            </div>

            <div class="row footer_middle">
                <!-- Start: About -->
                <div class="col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>About us </h5>
                        <p class="footer_para">Loren ipsum dolor cons ectetur adipi as scing elit sed do eiusmod tema
                            atp aor incididunt know you labore et dolo rate always ready to welcome you</p>
                    </div>
                </div>
                <!-- End: About -->
                <!-- Start: Helpful Link -->
                <div class="col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>Helpful Link </h5>
                        <ul class="recent-post helpful_post">
                            <li>
                                <h6><a href="#">Why choose us</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Our service</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">About us</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End: Helpful Link -->

                <!-- Start: Latest post -->
                <div class="col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>Latest post</h5>
                        <ul class="recent-post">
                            <li>
                                <h6><a href="#">Loren ipsum dolor consectetur elitdo </a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Loren ipsum dolor consectetur elitdo </a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Loren ipsum dolor consectetur elitdo </a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End: Latest post -->
                <!-- Start: CONTACT INFO -->
                <div class="col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>Subcribe now</h5>
                        <!-- Start Subscribe -->
                        <p class="footer_sub_para">Loren ipsum dolor cons ectetur adipi as scing elit sed do eiusmod
                            tema atp aor </p>
                        <form class="footer_subs">
                            <input class="form-input" placeholder="Enter Your Email Address" type="text">
                            <button type="submit" class="form-button"></button>
                        </form>
                    </div>
                </div>
                <!-- End: CONTACT INFO -->
                <!-- Start:Subfooter -->
                <div class="subfooter">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="copyright_text">@2017 Convertar - Transport HTML Template From <a
                                    href="#">Zcompany</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <ul class="footer_social_icons">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li class="google"><a href="#"><i class="fa fa-google"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <a class="scrollup" href="#"></a>
                        </div>
                    </div>
                </div>
                <!-- End:Subfooter -->
            </div>
        </div>
    </footer>
    <!-- End:Footer Section
========================================-->

    <!-- Scripts
========================================-->
    <!-- jquery -->
    <script data-cfasync="false" src="{{ asset('websiteAssets/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('websiteAssets/js/jquery-1.12.4.min.js')}}" type="e9083f03e6fe70b5b2b45604-text/javascript"></script>
    <!-- plugins -->
    <script src="{{ asset('websiteAssets/js/plugins.js')}}" type="e9083f03e6fe70b5b2b45604-text/javascript"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('websiteAssets/js/bootstrap.min.js')}}" type="e9083f03e6fe70b5b2b45604-text/javascript"></script>

    <!-- Custom Scripts
========================================-->
    <script src="{{ asset('websiteAssets/js/main.js')}}" type="e9083f03e6fe70b5b2b45604-text/javascript"></script>

    <script src="{{ asset('websiteAssets/js/rocket-loader.min.js') }}" data-cf-settings="e9083f03e6fe70b5b2b45604-|49"
        defer></script>
</body>

</html>
