@extends('website.layouts.websitemain')
@section('title', 'Services | ' . config('app.name'))
@section('content')


    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="index.html"> Home </a> / Service </h4>
                    <h3>Our Service</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
    ==================================================-->


    <!-- Start: Service Section
    ==================================================-->
    <section class="service_section service_page" id="agenda">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3> Our Services</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/service1.jpg') }}">
                            <a class="icon_ser" href="services.html"> <img alt="service"
                                    src="{{ asset('websiteAssets/images/service_icon_1.png') }}"></a>
                        </div>
                        <div class="service_para">
                            <h5>Express Delivery</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod
                                con placerat </p>
                            <a href="services.html">read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--/Item -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/service2.jpg') }}">
                            <a class="icon_ser" href="services.html"> <img alt="service"
                                    src="{{ asset('websiteAssets/images/service_icon_2.png') }}"></a>
                        </div>
                        <div class="service_para">
                            <h5>Air Freight</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod
                                con placerat </p>
                            <a href="services.html">read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--/Item -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/service3.jpg') }}">
                            <a class="icon_ser" href="services.html"> <img alt="service"
                                    src="{{ asset('websiteAssets/images/service_icon_3.png') }}"></a>
                        </div>
                        <div class="service_para">
                            <h5>Exp Transport</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod
                                con placerat </p>
                            <a href="services.html">read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--/Item -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/service4.jpg') }}">
                            <a class="icon_ser" href="services.html"> <img alt="service"
                                    src="{{ asset('websiteAssets/images/service_icon_1.png') }}"></a>
                        </div>
                        <div class="service_para">
                            <h5>Groupage Cargo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod
                                con placerat </p>
                            <a href="services.html">read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/service3.jpg') }}">
                            <a class="icon_ser" href="services.html"> <img alt="service"
                                    src="{{ asset('websiteAssets/images/service_icon_2.png') }}"></a>
                        </div>
                        <div class="service_para">
                            <h5>Exp Transport</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod
                                con placerat </p>
                            <a href="services.html">read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--/Item -->
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/service4.jpg') }}">
                            <a class="icon_ser" href="services.html"> <img alt="service"
                                    src="{{ asset('websiteAssets/images/service_icon_3.png') }}"></a>
                        </div>
                        <div class="service_para">
                            <h5>Groupage Cargo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elited hasellus id lectus quis dui euismod
                                con placerat </p>
                            <a href="services.html">Read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--/Item -->
                <!-- End : Tab pane 1 -->
            </div>
            <!---/.row -->
        </div>
        <!--/.container -->
    </section>
    <!-- End: Service Section
    ==================================================-->


    <!-- Start: Estimat Section
    ==================================================-->
    <div class="estimat_sectn" id="quote">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <form id="contactForm" class="form-order">
                        <div class="estimate_form_inner">
                            <h4>Request a quote</h4>
                            <div id="success"></div>
                            <div class="input-group">
                                <input name="user-name" id="user-name" placeholder="Full Name" required=""
                                    class="form-control" type="text">
                            </div>
                            <div class="input-group">
                                <input name="user-email" id="user-email" placeholder="Email Address" required=""
                                    class="form-control" type="email">
                            </div>
                            <div class="input-group">
                                <input name="user-phone" id="user-phone" placeholder="Phone No." class="form-control"
                                    type="tel">
                            </div>
                            <div class="input-group">
                                <input name="service" id="service" placeholder="Interest Of Service"
                                    class="form-control" type="tel">
                            </div>
                            <div class="input-group input_group_full_width">
                                <textarea id="user-message" placeholder="Message" required="" class="form-control" rows="4"></textarea>
                            </div>
                            <button class="btn btn-primary">GET AN ESTIMATE</button>
                        </div>
                    </form>
                    <!--/.form -->
                </div>
                <div class="col-sm-8 why_chs">
                    <div class="base-header">
                        <h3>Why Choosing us?</h3>
                    </div>
                    <div class="why_chs_box">
                        <span class="why_chs_icon"><i class="icon_group"></i></span>
                        <h4><span>Global supply Chain Solutions</span></h4>
                        <div class="why_chs_desc">
                            <p>Efficiently unleash cross-media information without cross-media value.</p>
                        </div>
                    </div>
                    <div class="why_chs_box">
                        <span class="why_chs_icon"><i class="icon_group"></i></span>
                        <h4><span>24 Hours - Technical Support</span></h4>
                        <div class="why_chs_desc">
                            <p>Specialises in international freight forwarding of merchandise and associated logistic
                                services</p>
                        </div>
                    </div>
                    <div class="why_chs_box">
                        <span class="why_chs_icon"><i class="icon_group"></i></span>
                        <h4><span>Mobile Shipment Tracking</span></h4>
                        <div class="why_chs_desc">
                            <p>We Offers intellgent concepts for road and tail and well as complex special transport
                                services</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row -->
        </div>
        <!--/.container -->
    </div>

    <!-- End: Estimat Section
    ==================================================-->

    <!-- Start: Client Section
    ==================================================-->
    <div class="client-section" id="client-section">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- client list  -->
                <div class="owl-carousel owl-theme col-md-12" id="client">
                    <!-- client 1 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-1.png') }}">
                            </div>
                        </div>
                    </div>
                    <!-- client 2 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-2.png') }}">
                            </div>
                        </div>
                    </div>
                    <!-- client 3 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-3.png') }}">
                            </div>
                        </div>
                    </div>
                    <!-- client 4 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-4.png') }}">
                            </div>
                        </div>
                    </div>
                    <!-- client 5 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-5.png') }}">
                            </div>
                        </div>
                    </div>
                    <!-- client 6 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-6.png') }}">
                            </div>
                        </div>
                    </div>
                    <!-- client 7 -->
                    <div class="item row">
                        <div class="col-md-12">
                            <div class="client-box"><img alt="client"
                                    src="{{ asset('websiteAssets/images/client-7.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ client list  -->
            </div>
            <!--/ row - -->
        </div>
        <!--/ Container - -->
    </div>
    <!--   End:Client Section
    ==================================================-->

    <!-- Start: Pricing Section
    ==================================================-->
    <section class="pricing-section" id="pricing">
        <!-- container -->
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Our Special Plan</h3>
            </div>
            <!-- End:  heading -->
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <!-- Start: pricing-box 1 -->
                    <div class="pricing-box">
                        <div class="pricing_heading">
                            <h2><span>$</span>70<sub>/Month</sub></h2>
                            <h4>basic plan</h4>
                        </div>
                        <ul>
                            <li>Cargo manual loading unloading</li>
                            <li>For a single time application </li>
                            <li>Cargo control weighing scales</li>
                            <li>Warehouse cargo handling </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="more-link">Order Now</a>
                        </div>
                    </div>
                    <!-- End: pricing-box 1 -->
                </div>
                <div class="col-sm-4 col-xs-12">
                    <!-- Start: pricing-box 2 -->
                    <div class="pricing-box">
                        <div class="pricing_heading">
                            <h2><span>$</span>40<sub>/Month</sub></h2>
                            <h4>standard plan</h4>
                        </div>
                        <ul>
                            <li>Two men for transport </li>
                            <li>Single covered truck</li>
                            <li>Maximum 100 miles </li>
                            <li>Additional trucks </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="more-link">Order Now</a>
                        </div>
                    </div>
                    <!-- End: pricing-box 2 -->
                </div>
                <div class="col-sm-4 col-xs-12 star">
                    <!-- Start: pricing-box 3 -->
                    <div class="pricing-box">
                        <div class="pricing_heading">
                            <h2><span>$</span>90<sub>/Month</sub></h2>
                            <h4>premium Plan</h4>
                        </div>
                        <ul>
                            <li>Two men for transport </li>
                            <li>Single covered truck</li>
                            <li>Maximum 100 miles </li>
                            <li>Additional trucks </li>
                        </ul>
                        <div class="text-center">
                            <a href="#" class="more-link">Order Now</a>
                        </div>
                    </div>
                    <!-- End: pricing-box 3 -->
                </div>
            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>
    <!--End: Pricing Section
    ==================================================-->




@endsection
