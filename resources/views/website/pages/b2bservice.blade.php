@extends('website.layouts.websitemain')
@section('title', 'B2B Services | ' . config('app.name'))
@section('content')


    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="index.html"> Home </a> / B2B Service </h4>
                    <h3>Our B2B Service</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
==================================================-->


    <!--Start: Single Service details 
==================================================-->
    <section class="single_service_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 single_service_page_content">
                    <img src="{{ asset('websiteAssets/images/blog_1.jpg')}}" alt="">
                    <div class="single_service_title">
                        <h3>Full Container Load</h3>
                        <p>Lorem ipsum dolor sit amet, in urna molestie tristique.Cong erment sed at facilisis lacinia aliquam fusce wisi, porta ligula nibh vel congue diam. Sed ligula erat molestie cras morbi in facilisis eu . </p>
                    </div>
                    <!-- End : /single_service_title -->

                    <div class="single_service_title2">
                        <h3>What Include in the Service?</h3>
                        <p>Lorem ipsum dolor sit amet, in urna molestie tristique.Cong erment sed at facilisis lacinia aliquam fusce wisi, porta ligula nibh vel congue diam. Sed ligula erat molestie cras morbi in facilisis eu </p>
						
                            <p> Lorem ipsum dolor sit amet, in urna molestie tristique.Cong erment sed at facilisis lacinia aliquam fusce wisi, porta ligula nibh vel congue diam. Sed ligula erat molestie cras morbi in facilisis eu elit Lorem ipsum dolor
                            sit amet, in urna molestie tristique.Cong erment sed at facilisis lacinia aliquam fusce wisi, porta ligula nibh vel congue diam. Sed ligula erat molestie cras morbi in in urna molestie tristique.Cong erment sed at facilisis
                            lacinia aliquam fusce wisi</p>
                    </div>
                    <!-- /single_service_title2 -->

                    <div class="row includee_single_service">
                        <div class="col-sm-6 col-xs-12">
                            <!-- service 1-->
                            <div class="service_list">
                                <div class="service_list_img">
                                    <img alt="team" class="img-responsive" src="{{ asset('websiteAssets/images/service1.jpg')}}">
                                </div>
                                <div class="service_info">
                                    <h6>Air Freight</h6>
                                    <p>Loren ipsum dolor sit amet adipiscing elit eiusmod sed do amethLoren ipsum dolor sit amet adipiscing elit eiusmod sed do </p>
                                </div>
                            </div>
                        </div>
                        <!-- end service 1-->
                        <!-- service 2-->
                        <div class="col-sm-6 col-xs-12">
                            <div class="service_list">
                                <div class="service_list_img">
                                    <img alt="team" class="img-responsive" src="{{ asset('websiteAssets/images/service2.jpg')}}">
                                </div>
                                <div class="service_info">
                                    <h6>Ocean Freight</h6>
                                    <p>Loren ipsum dolor sit amet adipiscing elit eiusmod sed do amethLoren ipsum dolor sit amet adipiscing elit eiusmod sed do </p>
                                </div>
                            </div>
                        </div>
                        <!-- end service 2-->
                    </div>
                    <!-- end service 3 -->


                </div>
                <!-- /single_service_page_content -->







                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 single_service_side_bar">
                    <div class="single_service_category">
                        <ul>
                            <li class="active"><a href="#"><i class="fa fa-angle-right"></i>Road Freight Forwarding</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Ground Transport</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Door to Door Delivery</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Ocean Freight Forwarding</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Air Freight Forwarding</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Warehousing</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /single_service_category -->

                    <div class="single_service_call">
                        <p>Have any Question ?
                            <br> Call Us :</p>
                        <a href="tel:123-973456778">123-973456778</a>
                        <span>For Details</span>
                    </div>
                    <!-- /single_service_call -->


                </div>
                <!--  /side_bar -->
            </div>
        </div>
    </section>

    <!-- End: Service details page
==================================================-->


@endsection
