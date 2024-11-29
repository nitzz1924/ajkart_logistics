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
                <!-- Start: Slider 1  -->
                <div class="single_slider slide_bg_1">
                    <div class="slider_item_tb">
                        <div class="slider_item_tbcell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <h2>Avoid Extra Costs<br><span>cargo </span> company </h2>
                                        <p>Click below to sign up for regular emails that will arm you with the questions
                                            you need to ship your goods in the best way.sign up for regular emails that
                                            Lakshmi Cargo Company Limited is a renowned </p>
                                        <div class="slider_btn">
                                            <a href="#quote" class="slider_btn_one">Get a quote</a>
                                            <a href="#quote" class="slider_btn_one slider_btn_two">View plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Slider 1  -->
                <!-- Start: Slider 2  -->
                <div class="single_slider slide_bg_2">
                    <div class="slider_item_tb">
                        <div class="slider_item_tbcell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2><span>We can make </span>your Cargo <br> & Logistics transport</h2>
                                        <p>Click below to sign up for regular emails that will arm you with the
                                            you need to ship your goods in the best way.sign up for regular
                                            emails that Lakshmi Cargo Company </p>
                                        <div class="slider_btn">
                                            <a href="#" class="slider_btn_one">Read more</a>
                                            <a href="#" class="slider_btn_one slider_btn_two">View plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: Slider 2  -->
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
                            <h3>We Are Convertar </h3>
                        </div>
                        <!-- End:  heading -->
                        <div class="about_det_warp">
                            <!-- about_list_warp -->
                            <div class="about_short_des">
                                <p>Lorem ipsum dolor sit amet cons ectetur adipi scing elited hasellus id lectus quis duia
                                    euismod con placet ssa nec elit egestas efficitur Lorem ipsum dolor sit amet cons ect
                                    etur adipi scing elited hasellus id lectus quis dui</p>
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
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reici endis cum
                                            aliquid quam, consequatur, quisquam consectetur ccumsan ipsum velit culpa charms
                                            of pleasure of the moment.
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
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reici endis cum
                                            aliquid quam, consequatur, quisquam consectetur ccumsan ipsum velit culpa charms
                                            of pleasure of the moment.
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
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos reici endis cum
                                            aliquid quam, consequatur, quisquam consectetur ccumsan ipsum velit culpa charms
                                            of pleasure of the moment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: .about_list_warp -->
                        </div>
                    </div>
                    <!--End: about_bottom_warp -->
                    <div class="col-sm-6">
                        <div class="about-right-img">
                            <div class="video-container">
                                <a data-backdrop="true" data-target="#video-modal" data-toggle="modal"><span
                                        class="play-video"><span class="fa fa-play"></span></span></a>
                            </div>
                            <!-- VIDEO POPUP
                            <div class="modal fade video-modal" id="video-modal" role="dialog">
                                <div class="modal-content">
                                    <div class="row">
                                        <iframe allowfullscreen="" height="400" src="websiteAssets/https://www.youtube.com/embed/BzMLA8YIgG0" width="712"></iframe>
                                    </div>
                                </div>
                            </div>
          -->
                        </div>
                    </div>
                    <!--End: About Video -->
                </div>
                <div class="row about_list_warp">
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea icon_group"></div>
                            <h5>Cost savings</h5>
                            <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea icon_cog"></div>
                            <h5>secure services</h5>
                            <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea  icon_documents"></div>
                            <h5>Cargo express</h5>
                            <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <!-- about-item -->
                        <div class="about_list">
                            <div class="icon-fea  icon_documents"></div>
                            <h5>Proven experience</h5>
                            <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                        </div>
                        <!-- End: .about-item -->
                    </div>
                </div>
                <!--End: row-->
            </div>
            <!-- End: container-->
        </section>
        <!--  End: About Section
    ==================================================-->



        <!-- Start: Service Section
    ==================================================-->
        <section class="service_section" id="agenda">
            <div class="container">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3> Our Services</h3>
                </div>
                <!-- End:  heading -->
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service1.jpg') }}">
                                <a class="icon_ser" href="services.html"> <img alt="service"
                                        src="{{ asset('websiteAssets/images/service_icon_1.png') }}"></a>
                            </div>
                            <div class="service_para">
                                <h5>Express Delivery</h5>
                                <p>Consectetur adipiscing elited hasellus id lorem ipsum dolor sit amet lectus quis dui
                                    euismod con placerat </p>
                            </div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service2.jpg') }}">
                                <a class="icon_ser" href="services.html"> <img alt="service"
                                        src="{{ asset('websiteAssets/images/service_icon_2.png') }}"></a>
                            </div>
                            <div class="service_para">
                                <h5>Air Freight</h5>
                                <p>Consectetur adipiscing elited hasellus id lorem ipsum dolor sit amet lectus quis dui
                                    euismod con placerat </p>
                            </div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service3.jpg') }}">
                                <a class="icon_ser" href="services.html"> <img alt="service"
                                        src="{{ asset('websiteAssets/images/service_icon_3.png') }}"></a>
                            </div>
                            <div class="service_para">
                                <h5>Exp Transport</h5>
                                <p>Consectetur adipiscing elited hasellus id lorem ipsum dolor sit amet lectus quis dui
                                    euismod con placerat </p>
                            </div>
                        </div>
                    </div>
                    <!--/Item -->
                    <div class="col-sm-3 col-xs-12">
                        <div class="service_list">
                            <div class="service_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/service4.jpg') }}">
                                <a class="icon_ser" href="services.html"> <img alt="service"
                                        src="{{ asset('websiteAssets/images/service_icon_2.png') }}"></a>
                            </div>
                            <div class="service_para">
                                <h5>Groupage Cargo</h5>
                                <p>Consectetur adipiscing elited hasellus id lorem ipsum dolor sit amet lectus quis dui
                                    euismod con placerat </p>
                            </div>
                        </div>
                    </div>
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
                                    <input name="user-phone" id="user-phone" placeholder="Phone No."
                                        class="form-control" type="tel">
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


        <!-- Start: Work Section
    ==================================================-->
        <section class="work-section">
            <div class="container-fluid">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3> Latest project </h3>
                </div>
                <!-- End:  heading -->
                <!-- Start: Work filter -->
                <ul class="projects-titles">
                    <li class="active" data-filter="*"><span>All Projects</span>
                    </li>
                    <li data-filter=".web"><span>Transport</span>
                    </li>
                    <li data-filter=".design"><span>Materials</span>
                    </li>
                    <li data-filter=".graphics"><span>Shipment</span>
                    </li>
                    <li data-filter=".development"><span>Cargo</span>
                    </li>
                    <li data-filter=".photoshop"><span>Others</span>
                    </li>
                </ul>
                <!-- End: Work filter -->

                <!-- Start: Work Item -->
                <div class="projects-list">
                    <div class="col-sm-3 col-xs-12 web graphics">
                        <div class="single-project-item">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Materials</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_1.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 1 -->
                    <div class="col-sm-3 col-xs-12 development photoshop">
                        <div class="single-project-item project-bg-2">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Transport</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_2.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 2 -->
                    <div class="col-sm-3 col-xs-12 web design">
                        <div class="single-project-item project-bg-3">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Shipment</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_3.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 3 -->
                    <div class="col-sm-3 col-xs-12 design web development">
                        <div class="single-project-item project-bg-4">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Cargo</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_4.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 4 -->
                    <div class="col-sm-3 col-xs-12 web graphics">
                        <div class="single-project-item project-bg-5">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Rail</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_5.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 5 -->
                    <div class="col-sm-3 col-xs-12 design development web">
                        <div class="single-project-item project-bg-6">
                            <div class="project-hover">
                                <h4><a href="gallery.html">shipping</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_6.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 6 -->
                    <!-- End: Work Item 6 -->
                    <div class="col-sm-3 col-xs-12 graphics web">
                        <div class="single-project-item project-bg-7">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Facilities</a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_7.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 7 -->
                    <div class="col-sm-3 col-xs-12 photoshop">
                        <div class="single-project-item project-bg-8">
                            <div class="project-hover">
                                <h4><a href="gallery.html">Charter </a></h4>
                                <span><a href="single-gallery.html">Cargo</a></span>
                                <a class="project-link" href="images/work_8.jpg"><i class="icon_image"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End: Work Item 8 -->
                </div>
            </div>
        </section>
        <!-- End: Work Section
    ==================================================-->

        <!-- Start: Facts Section
    ==================================================-->
        <section class="confacts-section">
            <div class="container">
                <div class="row">
                    <div class="funfact_wapr">
                        <!-- col-lg-4 -->
                        <div class="col-sm-3 col-xs-12">
                            <div class="facts_text">
                                <h3>What Makes <br>us Special ?</h3>
                            </div>
                        </div>
                        <!-- col-lg-4 /- -->
                        <!-- col-lg-4 -->
                        <div class="col-sm-3 col-xs-12">
                            <div class="facts_wrapper">
                                <div class="icon-lay">
                                    <i class="icon_genius"></i>
                                </div>
                                <h3 class="stat-count count">275</h3>
                                <h5> Loggs transfered </h5>
                            </div>
                        </div>
                        <!-- col-lg-4 /- -->
                        <!-- col-lg-4 -->
                        <div class="col-sm-3 col-xs-12">
                            <div class="facts_wrapper">
                                <div class="icon-lay">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <h3 class="stat-count count">374</h3>
                                <h5> Happy customers </h5>
                            </div>
                        </div>
                        <!-- col-lg-4 /- -->
                        <!-- col-lg-4 -->
                        <div class="col-sm-3 col-xs-12">
                            <div class="facts_wrapper">
                                <div class="icon-lay">
                                    <i class="arrow_move"></i>
                                </div>
                                <h3 class="stat-count count">437</h3>
                                <h5> Miles travelled </h5>
                            </div>
                        </div>
                        <!-- col-lg-4 /- -->
                    </div>
                    <!-- funfact_wapr /- -->
                </div>
                <!-- row /- -->
            </div>
            <!-- container /- -->
        </section>
        <!-- Start: Facts Section
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
                        <div class="member_warp">
                            <div class="member_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/team-1.jpg') }}">
                            </div>
                            <div class="team_social">
                                <ul>
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i
                                                class="fa fa-facebook"></i></a>
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
                        <div class="member_warp">
                            <div class="member_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/team-2.jpg') }}">
                            </div>
                            <div class="team_social">
                                <ul>
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i
                                                class="fa fa-facebook"></i></a>
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
                        <div class="member_warp">
                            <div class="member_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/team-3.jpg') }}">
                            </div>
                            <div class="team_social">
                                <ul>
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i
                                                class="fa fa-facebook"></i></a>
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
                        <div class="member_warp">
                            <div class="member_img">
                                <img alt="team" class="img-responsive"
                                    src="{{ asset('websiteAssets/images/team-4.jpg') }}">
                            </div>
                            <div class="team_social">
                                <ul>
                                    <li>
                                        <a href="#" title="Follow Us on Facebook"><i
                                                class="fa fa-facebook"></i></a>
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

        <!-- Start: Testimonial Section
    ==================================================-->
        <div class="testimonials-section" id="testimo">
            <div class="container">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3>what client say</h3>
                </div>
                <!-- End:  heading -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Testimonials-->
                        <div class="owl-carousel owl-theme" id="testimonial">
                            <!-- Start: Testimonial 1 -->
                            <div class="item">
                                <div class="testimonial-box">
                                    <div class="testi_images">
                                        <img alt="testimonial" src="{{ asset('websiteAssets/images/tes1.jpg') }}">
                                    </div>
                                    <div class="testimonial_content">
                                        <p>Lorem ipsum dolor sit ametet verear infor noluisse eumdiam congue refor midans
                                            was at atomorum his idpri te hinc expetendasts </p>
                                    </div>
                                    <div class="cus-title">
                                        <span class="tes-nam">John Watson</span>
                                        <span class="tes-degree">CEO At Facebook</span>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class=" icon_star-half_alt"></i>
                                    </div>
                                </div>
                                <!--End: Testimonial 1 -->
                            </div>
                            <!-- Start: Testimonial 2 -->
                            <div class="item">
                                <div class="testimonial-box">
                                    <div class="testi_images">
                                        <img alt="testimonial" src="{{ asset('websiteAssets/images/tes2.jpg') }}">
                                    </div>
                                    <div class="testimonial_content">
                                        <p>Lorem ipsum dolor sit ametet verear infor noluisse eumdiam congue refor midans
                                            was at atomorum his idpri te hinc expetendasts </p>
                                    </div>
                                    <div class="cus-title">
                                        <span class="tes-nam">John Watson</span>
                                        <span class="tes-degree">CEO At Facebook</span>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class=" icon_star-half_alt"></i>
                                    </div>
                                </div>
                                <!--End: Testimonial 2 -->
                            </div>
                            <!-- Start: Testimonial 3 -->
                            <div class="item">
                                <div class="testimonial-box">
                                    <div class="testi_images">
                                        <img alt="testimonial" src="{{ asset('websiteAssets/images/tes3.jpg') }}">
                                    </div>
                                    <div class="testimonial_content">
                                        <p>Lorem ipsum dolor sit ametet verear infor noluisse eumdiam congue refor midans
                                            was at atomorum his idpri te hinc expetendasts </p>
                                    </div>
                                    <div class="cus-title">
                                        <span class="tes-nam">John Watson</span>
                                        <span class="tes-degree">CEO At Facebook</span>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class=" icon_star-half_alt"></i>
                                    </div>
                                </div>
                                <!--End: Testimonial 3 -->
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!-- End: Testimonial Section
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


        <!--  Start: Blog Section
    ==================================================-->
        <section class="blog-section">
            <div class="container">
                <!-- Start: Heading -->
                <div class="base-header">
                    <h3>Latest News </h3>
                </div>
                <!-- End:  heading -->
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="blog-warp-1 blog_warp_lay_1">
                            <div class="blog_imgg">
                                <img src="{{ asset('websiteAssets/images/blog_1.jpg') }}" alt="" />
                                <div class="publisd-date"> <i class="arrow_right"></i> </div>
                            </div>
                            <div class="blog_content_warp">
                                <a href="#" class="blog_datee"><i class="fa fa-calendar"></i> June 24 </a>
                                <a href="#" class="subtext"><i class="fa fa-tag"></i> Marketing </a>
                                <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 </a>
                                <h5><a href="blog.html">The role of logistics chain</a></h5>
                                <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typesetting industrydummy
                                    texat thhke dummy texte ofthe anadthe printing </p>
                                <a href="single-blog.html" class="blog_btn">Continue Reading <span
                                        class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--/ Blog Item 1 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="blog-warp-1 blog_warp_lay_1">
                            <div class="blog_imgg">
                                <img src="{{ asset('websiteAssets/images/blog_2.jpg') }}" alt="" />
                                <div class="publisd-date"> <i class="arrow_right"></i> </div>
                            </div>
                            <div class="blog_content_warp">
                                <a href="#" class="blog_datee"><i class="fa fa-calendar"></i> June 24 </a>
                                <a href="#" class="subtext"><i class="fa fa-tag"></i> Marketing </a>
                                <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 </a>
                                <h5><a href="blog.html">The critical transportation</a></h5>
                                <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typesetting industrydummy
                                    texat thhke dummy texte ofthe anadthe printing </p>
                                <a href="single-blog.html" class="blog_btn">Continue Reading <span
                                        class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--/ Blog Item 2 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="blog-warp-1 blog_warp_lay_1">
                            <div class="blog_imgg">
                                <img src="{{ asset('websiteAssets/images/blog_1.jpg') }}" alt="" />
                                <div class="publisd-date"> <i class="arrow_right"></i> </div>
                            </div>
                            <div class="blog_content_warp">
                                <a href="#" class="blog_datee"><i class="fa fa-calendar"></i> June 24 </a>
                                <a href="#" class="subtext"><i class="fa fa-tag"></i> Marketing </a>
                                <a href="#" class="subtext"><i class="fa fa-comment-o"> </i> 5 </a>
                                <h5><a href="blog.html"> The role of logistics chain</a></h5>
                                <p>Lorem Ipsum is simply dummy text ofthe anadthe printing of typesetting industrydummy
                                    texat thhke dummy texte ofthe anadthe printing </p>
                                <a href="single-blog.html" class="blog_btn">Continue Reading <span
                                        class="fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--/ Blog Item 3 -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->
        </section>
        <!--   End: Blog Section
    ==================================================-->

    </div>

@endsection
