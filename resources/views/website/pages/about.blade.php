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
                    <h3>We Are Convertar </h3>
                </div>
                <!-- End:  heading -->
                <div class="about_det_warp">
                    <!-- about_list_warp -->
                    <div class="about_short_des wow fadeInUp">
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
                                <iframe allowfullscreen="" height="400" src="https://www.youtube.com/embed/BzMLA8YIgG0" width="712"></iframe>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
            <!--End: About Video -->
        </div>
        <div class="row about_list_warp">
            <div class="col-sm-3 col-xs-12 wow fadeInUp">
                <!-- about-item -->
                <div class="about_list">
                    <div class="icon-fea icon_group"></div>
                    <h5>Cost savings</h5>
                    <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                </div>
                <!-- End: .about-item -->
            </div>
            <div class="col-sm-3 col-xs-12 wow fadeInUp" data-wow-delay=".1s">
                <!-- about-item -->
                <div class="about_list">
                    <div class="icon-fea icon_cog"></div>
                    <h5>secure services</h5>
                    <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                </div>
                <!-- End: .about-item -->
            </div>
            <div class="col-sm-3 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
                <!-- about-item -->
                <div class="about_list">
                    <div class="icon-fea  icon_documents"></div>
                    <h5>Cargo express</h5>
                    <div class="about_para">Loren ipsum dolor sitamet adipiscing elit sed do eiusmod ameth </div>
                </div>
                <!-- End: .about-item -->
            </div>
            <div class="col-sm-3 col-xs-12 wow fadeInUp" data-wow-delay=".2s">
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
                                <img alt="testimonial" src="{{ asset('websiteAssets/images/tes1.jpg')}}">
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
                                <img alt="testimonial" src="{{ asset('websiteAssets/images/tes2.jpg')}}">
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
                                <img alt="testimonial" src="{{ asset('websiteAssets/images/tes3.jpg')}}">
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
                        <img alt="team" class="img-responsive" src="{{ asset('websiteAssets/images/team-1.jpg')}}">
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
                        <img alt="team" class="img-responsive" src="{{ asset('websiteAssets/images/team-2.jpg')}}">
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
                        <img alt="team" class="img-responsive" src="{{ asset('websiteAssets/images/team-3.jpg')}}">
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
                        <img alt="team" class="img-responsive" src="{{ asset('websiteAssets/images/team-4.jpg')}}">
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
