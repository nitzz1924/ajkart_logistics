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
    {{-- <div id="preloader"></div> --}}
    <!-- ::::::::::::::::::::::::::: End: Preloader section ::::::::::::::::::::::::::: -->

    <!-- Start: Header Section
==================================================-->
    {{-- <div class="header_top">
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
    </div> --}}
    <!-- End: Header Info -->

    <!-- Start: header navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="header_logo">
                    <a href="{{ route('home') }}"><img width="200px" src="{{ asset('assets/images/mainlogo.png') }}"
                            alt="header_logo">
                    </a>
                </div>
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

            <!-- Middle Footer -->
            <div class="row footer_middle">
                <!-- About Us -->
                <div class="col-sm-3 col-xs-12">
                    <div class="footer_contact col-md-3 col-xs-12 col-sm-12">
                        <a href="{{ route('home') }}" class="footer-logo">
                            <img src="{{ asset('assets/images/mainlogo.png') }}" width="250px" alt="Footer Logo">
                        </a>
                    </div>
                    <div class="widget">
                        <h5>About Us</h5>
                        <p class="footer_para">
                            AJ Kart Logistic specializes in reliable, fast, and flexible logistics solutions. With a
                            focus on customer satisfaction, we ensure seamless cargo handling and delivery.
                        </p>
                    </div>
                </div>
                <!-- Helpful Links -->
                <div class="col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>Helpful Links</h5>
                        <ul class="recent-post helpful_post">
                            <li>
                                <h6><a href="{{ route('privacypolicy')}}">Privacy Policy</a></h6>
                            </li>
                            <li>
                                <h6><a href="{{route('termsandconditions')}}">Terms & Conditions</a></h6>
                            </li>
                            <li>
                                <h6><a href="{{route('b2bservice')}}">B2B Service</a></h6>
                            </li>
                            <li>
                                <h6><a href="{{route('contactus')}}">Contact Us</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Latest News -->
                <div class="col-sm-3 col-xs-12">
                    
                    <div class="widget">
                        <h5>Latest Updates</h5>
                        <div class="footer_contact ">
                            <i class="icon_pin_alt"></i>
                            <p>Corporate Office:</p>
                            <h4>Uattar Pradesh, INDIA</h4>
                        </div>
                        <div class="footer_contact ">
                            <i class="icon_phone"></i>
                            <p>Contact Us:</p>
                            <h4>+91 (1234) 567-890</h4>
                        </div>
                        <div class="footer_contact ">
                            <i class="icon_clock_alt"></i>
                            <p>Working Hours:</p>
                            <h4>Mon - Fri: 9 AM - 6 PM</h4>
                        </div>
                        
                    </div>
                </div>
                <!-- Subscribe -->
                <div class="col-sm-3 col-xs-12">
                    <div class="widget">
                        <h5>Subscribe to Updates</h5>
                        <p class="footer_sub_para">
                            Stay updated on the latest in logistics and exclusive offers by subscribing to our
                            newsletter.
                        </p>
                        <form class="footer_subs">
                            <input class="form-input" placeholder="Enter Your Email Address" type="email" required>
                            <button type="submit" class="form-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Bottom Footer -->
            <div class="subfooter">
                <div class="row">
                    <!-- Copyright -->
                    <div class="col-md-6 col-xs-12">
                        <div class="copyright_text">
                            ©2024 AJ Kart Logistic. All Rights Reserved. Designed by <a href="https://yuvmedia.in" target="_blank">Yuvmedia</a>.
                        </div>
                    </div>
                    <!-- Social Icons -->
                    <div class="col-md-4 col-xs-12">
                        <ul class="footer_social_icons">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Scroll to Top -->
                    <div class="col-md-2 col-xs-12">
                        <a class="scrollup" href="#top"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
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
