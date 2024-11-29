@extends('website.layouts.websitemain')
@section('title', 'About | ' . config('app.name'))
@section('content')

    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="/"> Home </a> / About </h4>
                    <h3>Our About</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
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
                                <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" role="button">
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



    <!-- Start: Testimonial Section
    ==================================================-->
    <div class="testimonials-section" id="testimo">
        <div class="container">
            <!-- Heading -->
            <div class="base-header text-center">
                <h3>What Our Clients Say</h3>
            </div>
            <!-- Testimonials Carousel -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="owl-carousel owl-theme" id="testimonial">
                        <!-- Testimonial 1 -->
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="testi-images text-center">
                                    <img alt="testimonial" src="{{ asset('websiteAssets/images/tes1.jpg') }}" class="img-fluid rounded-circle">
                                </div>
                                <div class="testimonial-content">
                                    <p>AJ Kart Logistic made our shipment process smooth and stress-free. Their real-time tracking and support team ensured timely delivery every step of the way!</p>
                                </div>
                                <div class="cus-title text-center">
                                    <span class="tes-name d-block font-weight-bold">Sophia Brown</span>
                                    <span class="tes-degree d-block text-muted">Operations Manager, TechCo</span>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="testi-images text-center">
                                    <img alt="testimonial" src="{{ asset('websiteAssets/images/tes2.jpg') }}" class="img-fluid rounded-circle">
                                </div>
                                <div class="testimonial-content">
                                    <p>We’ve partnered with AJ Kart Logistic for over two years, and their reliability has been unmatched. Their team is always available to answer our queries and ensure flawless deliveries.</p>
                                </div>
                                <div class="cus-title text-center">
                                    <span class="tes-name d-block font-weight-bold">David Lee</span>
                                    <span class="tes-degree d-block text-muted">Supply Chain Lead, RetailMax</span>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="testi-images text-center">
                                    <img alt="testimonial" src="{{ asset('websiteAssets/images/tes3.jpg') }}" class="img-fluid rounded-circle">
                                </div>
                                <div class="testimonial-content">
                                    <p>With AJ Kart Logistic’s mobile shipment tracking, we always stay updated. Their efficient network has significantly streamlined our supply chain operations.</p>
                                </div>
                                <div class="cus-title text-center">
                                    <span class="tes-name d-block font-weight-bold">Emily Clark</span>
                                    <span class="tes-degree d-block text-muted">Logistics Manager, AgriFlow</span>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- End: Testimonial Section
    ==================================================-->


    <!-- End: Team Section
    ==================================================-->
    <section class="team_section">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Meet the team</h3>
            </div>
            <!-- End:  heading -->
            <!-- profile 1-->
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="member_warp wow fadeInUp" data-wow-delay=".1s">
                        <div class="member_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/team-1.jpg') }}">
                        </div>
                        <div class="team_social">
                            <ul>
                                <li>
                                    <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="member_info">
                            <h6>Adam Gilcrist <small>Founder</small></h6>
                        </div>
                    </div>
                </div>
                <!-- end profile 1-->

                <!-- profile 2-->
                <div class="col-sm-3 col-xs-12">
                    <div class="member_warp wow fadeInUp" data-wow-delay=".2s">
                        <div class="member_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/team-2.jpg') }}">
                        </div>
                        <div class="team_social">
                            <ul>
                                <li>
                                    <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="member_info">
                            <h6>Kristen Crew <small>Co Founder</small></h6>
                        </div>
                    </div>
                </div>
                <!-- end profile 2-->

                <!-- profile 3-->
                <div class="col-sm-3 col-xs-12">
                    <div class="member_warp wow fadeInUp" data-wow-delay=".3s">
                        <div class="member_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/team-3.jpg') }}">
                        </div>
                        <div class="team_social">
                            <ul>
                                <li>
                                    <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="member_info">
                            <h6>Robert Doe <small>Chairman</small></h6>
                        </div>
                    </div>
                </div>
                <!-- end profile 3 -->
                <div class="col-sm-3 col-xs-12">
                    <div class="member_warp wow fadeInUp" data-wow-delay=".1s">
                        <div class="member_img">
                            <img alt="team" class="img-responsive"
                                src="{{ asset('websiteAssets/images/team-4.jpg') }}">
                        </div>
                        <div class="team_social">
                            <ul>
                                <li>
                                    <a href="#" title="Follow Us on Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Follow Us on Twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Watch Our Videos"><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="member_info">
                            <h6>Jon Gilcrist <small>Driver</small></h6>
                        </div>
                    </div>
                </div>
                <!-- end profile 1-->
            </div>
            <!---/.row -->
        </div>
        <!--/.container -->
    </section>

    <!-- Start: Team Section
    ==================================================-->
@endsection
