@extends('website.layouts.websitemain')
@section('title', 'Home | ' . config('app.name'))
@section('content')

    <div>

        <!-- Start: Slides  -->
        <div class="slides_wrapper">
            <div class="slides__preload_wrapper">
                <div class="spinner"></div>
            </div>
            <div class="slider_home">
                <!-- Start: Slider 1 -->
                <div class="single_slider slide_bg_1">
                    <div class="slider_item_tb">
                        <div class="slider_item_tbcell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <h2>Streamline Your Shipments<br><span>with AJ Kart Logistic</span></h2>
                                        <p>Experience hassle-free logistics management with our advanced shipping solutions.
                                            Sign up today to access exclusive tools that help you optimize your delivery
                                            process.</p>
                                        <div class="slider_btn">
                                            <a href="#quote" class="slider_btn_one">Get a Quote</a>
                                            <a href="#quote" class="slider_btn_one slider_btn_two">Explore Plans</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Slider 1 -->
                <!-- Start: Slider 2 -->
                <div class="single_slider slide_bg_2">
                    <div class="slider_item_tb">
                        <div class="slider_item_tbcell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2><span>Efficient, Reliable </span>& Secure Logistics Solutions</h2>
                                        <p>From small packages to bulk shipments, AJ Kart Logistic ensures your cargo
                                            reaches its destination on time and in perfect condition. Partner with us for
                                            simplified logistics.</p>
                                        <div class="slider_btn">
                                            <a href="#services" class="slider_btn_one">Learn More</a>
                                            <a href="#plans" class="slider_btn_one slider_btn_two">View Plans</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Slider 2 -->
            </div>
        </div>

        <!-- End:  Slider
        ==================================================-->



        <!-- Start: About Section
        ==================================================-->
        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 about_bottom_warp">
                        <!-- Start: Heading -->
                        <div class="base-header">
                            <h3>About AJ Kart Logistic</h3>
                        </div>
                        <!-- End: Heading -->
                        <div class="about_det_warp">
                            <!-- about_list_warp -->
                            <div class="about_short_des">
                                <p>At AJ Kart Logistic, we specialize in delivering seamless logistics solutions for
                                    businesses of all sizes. With our advanced technology and reliable network, we ensure
                                    efficient shipping, timely deliveries, and exceptional customer service across the
                                    globe.</p>
                            </div>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading active">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseOne" aria-expanded="true">
                                                Our History
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true"
                                        role="button">
                                        <div class="panel-body">
                                            Established with a vision to revolutionize logistics, AJ Kart Logistic has grown
                                            into a trusted partner for businesses seeking reliable and cost-effective
                                            solutions. Our journey is defined by a commitment to innovation and excellence.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                                Our Mission
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false"
                                        role="button">
                                        <div class="panel-body">
                                            To empower businesses with efficient, secure, and flexible logistics solutions
                                            that adapt to their unique needs, ensuring their success in an ever-changing
                                            market.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                                                Our Vision
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false"
                                        role="button">
                                        <div class="panel-body">
                                            To be the leading logistics provider, known for our innovative technology,
                                            unmatched reliability, and customer-centric approach.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .about_list_warp -->
                        </div>
                    </div>
                    <!-- End: about_bottom_warp -->
                    <div class="col-sm-6">
                        <div class="about-right-img">
                            <div class="video-container">
                                <a data-backdrop="true" data-target="#video-modal" data-toggle="modal">
                                    <span class="play-video"><span class="fa fa-play"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End: About Video -->
                </div>
                <div class="row about_list_warp">
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea icon_group"></div>
                            <h5>Cost Savings</h5>
                            <div class="about_para">Optimize your logistics and reduce operational costs with our tailored
                                solutions.</div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea icon_cog"></div>
                            <h5>Secure Services</h5>
                            <div class="about_para">Our advanced tracking and security measures ensure safe delivery of your
                                shipments.</div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea icon_documents"></div>
                            <h5>Cargo Express</h5>
                            <div class="about_para">Fast and efficient delivery solutions for time-sensitive shipments.
                            </div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea icon_documents"></div>
                            <h5>Proven Experience</h5>
                            <div class="about_para">Years of expertise in logistics to provide you with the best service.
                            </div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                </div>
                <!-- End: row -->
            </div>
            <!-- End: container -->
        </section>

        <!--  End: About Section
        ==================================================-->



        <!-- Start: Service Section
        ==================================================-->
        <section class="service_section" id="agenda">
            <div class="container">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3>Our Services</h3>
                </div>
                <!-- End: Heading -->
                <div class="row">
                    <!-- Express Delivery -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="Express Delivery" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service1.jpg') }}">
                                <a class="icon_ser" href="services.html">
                                    <img alt="Express Delivery Icon"
                                        src="{{ asset('websiteAssets/images/service_icon_1.png') }}">
                                </a>
                            </div>
                            <div class="service_para">
                                <h5>Express Delivery</h5>
                                <p>Quick and reliable delivery service for time-sensitive shipments, ensuring your cargo reaches its destination on schedule.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Air Freight -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="Air Freight" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service2.jpg') }}">
                                <a class="icon_ser" href="services.html">
                                    <img alt="Air Freight Icon"
                                        src="{{ asset('websiteAssets/images/service_icon_2.png') }}">
                                </a>
                            </div>
                            <div class="service_para">
                                <h5>Air Freight</h5>
                                <p>Fast and secure air freight services for international and domestic shipping needs, with real-time tracking.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Expedited Transport -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="Expedited Transport" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service3.jpg') }}">
                                <a class="icon_ser" href="services.html">
                                    <img alt="Expedited Transport Icon"
                                        src="{{ asset('websiteAssets/images/service_icon_3.png') }}">
                                </a>
                            </div>
                            <div class="service_para">
                                <h5>Expedited Transport</h5>
                                <p>Efficient road transport solutions tailored to your needs, offering flexibility and reliability for businesses.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Groupage Cargo -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="Groupage Cargo" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service4.jpg') }}">
                                <a class="icon_ser" href="services.html">
                                    <img alt="Groupage Cargo Icon"
                                        src="{{ asset('websiteAssets/images/service_icon_2.png') }}">
                                </a>
                            </div>
                            <div class="service_para">
                                <h5>Groupage Cargo</h5>
                                <p>Cost-effective cargo consolidation service that allows you to share transport space while ensuring safety and timely delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Row -->
            </div>
            <!-- End: Container -->
        </section>
        
        <!-- End: Service Section
        ==================================================-->


        <!-- Start: Estimat Section
        ==================================================-->
        <div class="estimat_sectn" id="quote">
            <div class="container">
                <div class="row">
                    <!-- Request a Quote Form -->
                    <div class="col-sm-4">
                        <form id="contactForm" class="form-order">
                            <div class="estimate_form_inner">
                                <h4>Request a Quote</h4>
                                <div id="success"></div>
                                <div class="input-group">
                                    <input name="user-name" id="user-name" placeholder="Full Name" required
                                        class="form-control" type="text">
                                </div>
                                <div class="input-group">
                                    <input name="user-email" id="user-email" placeholder="Email Address" required
                                        class="form-control" type="email">
                                </div>
                                <div class="input-group">
                                    <input name="user-phone" id="user-phone" placeholder="Phone No." required
                                        class="form-control" type="tel">
                                </div>
                                <div class="input-group">
                                    <input name="service" id="service" placeholder="Interest Of Service" required
                                        class="form-control" type="text">
                                </div>
                                <div class="input-group input_group_full_width">
                                    <textarea id="user-message" name="user-message" placeholder="Message" required
                                        class="form-control" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Get an Estimate</button>
                            </div>
                        </form>
                    </div>
                    <!-- Why Choosing Us Section -->
                    <div class="col-sm-8 why_chs">
                        <div class="base-header">
                            <h3>Why Choose Us?</h3>
                        </div>
                        <div class="why_chs_box">
                            <span class="why_chs_icon"><i class="icon_group"></i></span>
                            <h4><span>Global Supply Chain Solutions</span></h4>
                            <div class="why_chs_desc">
                                <p>Efficiently unleash cross-media information without cross-media value.</p>
                            </div>
                        </div>
                        <div class="why_chs_box">
                            <span class="why_chs_icon"><i class="icon_group"></i></span>
                            <h4><span>24/7 Technical Support</span></h4>
                            <div class="why_chs_desc">
                                <p>Specializing in international freight forwarding and logistics services.</p>
                            </div>
                        </div>
                        <div class="why_chs_box">
                            <span class="why_chs_icon"><i class="icon_group"></i></span>
                            <h4><span>Mobile Shipment Tracking</span></h4>
                            <div class="why_chs_desc">
                                <p>Intelligent concepts for road and rail transport as well as complex special delivery services.</p>
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

        <!-- Start: Facts Section
        ==================================================-->
        <section class="confacts-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- What Makes Us Special -->
                    <div class="col-sm-3 col-12">
                        <div class="facts_text">
                            <h3>What Makes <br>Us Special?</h3>
                        </div>
                    </div>
                    <!-- Fact 1 -->
                    <div class="col-sm-3 col-12">
                        <div class="facts_wrapper text-center">
                            <div class="icon-lay">
                                <i class="icon_genius"></i>
                            </div>
                            <h3 class="stat-count count">275</h3>
                            <h5>Logs Transferred</h5>
                        </div>
                    </div>
                    <!-- Fact 2 -->
                    <div class="col-sm-3 col-12">
                        <div class="facts_wrapper text-center">
                            <div class="icon-lay">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <h3 class="stat-count count">374</h3>
                            <h5>Happy Customers</h5>
                        </div>
                    </div>
                    <!-- Fact 3 -->
                    <div class="col-sm-3 col-12">
                        <div class="facts_wrapper text-center">
                            <div class="icon-lay">
                                <i class="arrow_move"></i>
                            </div>
                            <h3 class="stat-count count">437</h3>
                            <h5>Miles Travelled</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Start: Facts Section
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

    </div>

@endsection
