@extends('website.layouts.websitemain')
@section('title', 'Services | ' . config('app.name'))
@section('content')

    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <h4><a href="{{ route('home') }}"> Home </a> / Services </h4>
                    <h3>Our Services</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- Start: Service Section -->
    <section class="service_section service_page" id="agenda">
        <div class="container">
            <div class="base-header">
                <h3>Our Services</h3>
            </div>
            <div class="row">
                <!-- Inventory Management -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="Inventory Management" class="img-responsive"
                                src="https://pacs.ru/upload/788905441.jpg">
                            <a class="icon_ser" href="{{ route('services') }}">
                                <img alt="service" src="{{ asset('websiteAssets/images/service_icon_1.png') }}">
                            </a>
                        </div>
                        <div class="service_para">
                            <h5>Inventory Management</h5>
                            <p>Modern storage solutions with real-time tracking and automated restocking alerts to manage
                                your stock efficiently.</p>
                            <a href="{{ route('services') }}">Read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>
                <!-- Delivery Services -->
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="service_list">
                        <div class="service_img">
                            <img alt="Delivery Services" class="img-responsive"
                                src="https://static.lsm.lv/media/2016/01/large/0/564k.jpg">
                            <a class="icon_ser" href="{{ route('services') }}">
                                <img alt="service" src="{{ asset('websiteAssets/images/service_icon_2.png') }}">
                            </a>
                        </div>
                        <div class="service_para">
                            <h5>Delivery Services</h5>
                            <p>Reliable and timely B2B and B2C delivery solutions, ensuring your products reach the right
                                destination with ease.</p>
                            <a href="{{ route('services') }}">Read more <span class="fa fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End: Service Section -->

    <section class="single_service_section service_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 single_service_page_content">
                    <img src="https://prova-nov.ro/wp-content/uploads/industrii_logistica-scaled.jpg"
                        alt="B2B Logistics Services">
                    <div class="single_service_title">
                        <h3>Comprehensive B2B Logistics Solutions</h3>
                        <p>At AJ Kart Logistics, we specialize in providing tailored B2B logistics solutions to businesses
                            of all sizes. From managing large-scale shipments to offering seamless inventory integration, we
                            ensure your supply chain operates efficiently and effectively.</p>
                    </div>
                    <!-- End : /single_service_title -->

                    <div class="single_service_title2">
                        <h3>Key Features of Our B2B Services</h3>
                        <ul>
                            <li><strong>Bulk Shipping:</strong> Efficient handling of bulk shipments with robust
                                infrastructure for safe and timely delivery.</li>
                            <li><strong>Dedicated Support:</strong> Personalized account management to meet your unique
                                business needs.</li>
                            <li><strong>Real-Time Tracking:</strong> Keep a close eye on your shipments with our advanced
                                tracking tools.</li>
                            <li><strong>Warehousing Solutions:</strong> Secure and scalable storage facilities integrated
                                with inventory management systems.</li>
                            <li><strong>Custom Packaging:</strong> Tailored packaging options for business needs, ensuring
                                product safety and brand presentation.</li>
                            <li><strong>Multi-Channel Fulfillment:</strong> Deliver goods to distributors, retailers, or
                                directly to your B2B customers.</li>
                        </ul>
                    </div>
                    <!-- /single_service_title2 -->

                    <div class="row includee_single_service">
                        <!-- Bulk Shipping -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="service_list">
                                <div class="service_list_img">
                                    <img alt="Bulk Shipping" class="img-responsive"
                                        src="https://g.foolcdn.com/image/?url=https%3A//g.foolcdn.com/editorial/images/605889/planes-trains-and-automobilies-logistics-getty.jpg&w=2000&op=resize">
                                </div>
                                <div class="service_info">
                                    <h6>Bulk Shipping</h6>
                                    <p>Handle large-scale deliveries with efficiency and accuracy, ensuring that your goods
                                        reach distributors on time.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Bulk Shipping -->

                        <!-- Warehousing -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="service_list">
                                <div class="service_list_img">
                                    <img alt="Warehousing Solutions" class="img-responsive"
                                        src="https://www.datexcorp.com/wp-content/uploads/shutterstock_779024605-1-scaled.jpg">
                                </div>
                                <div class="service_info">
                                    <h6>Warehousing Solutions</h6>
                                    <p>Secure, temperature-controlled storage facilities with inventory management systems
                                        that simplify your supply chain operations.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Warehousing -->
                    </div>

                    <div class="row includee_single_service">
                        <!-- Custom Packaging -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="service_list">
                                <div class="service_list_img">
                                    <img alt="Custom Packaging" class="img-responsive"
                                        src="https://i.pinimg.com/originals/0b/8b/bf/0b8bbf456669a940926ab25b902a2f34.jpg">
                                </div>
                                <div class="service_info">
                                    <h6>Custom Packaging</h6>
                                    <p>We offer custom packaging solutions that ensure the safety of your products and
                                        reflect your brand identity effectively.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Custom Packaging -->

                        <!-- Multi-Channel Fulfillment -->
                        <div class="col-sm-6 col-xs-12">
                            <div class="service_list">
                                <div class="service_list_img">
                                    <img alt="Multi-Channel Fulfillment" class="img-responsive"
                                        src="https://novelco.ru/upload/iblock/00d/00d866634ab9aa274f26aaad19abdc7c.jpg">
                                </div>
                                <div class="service_info">
                                    <h6>Multi-Channel Fulfillment</h6>
                                    <p>Seamlessly deliver your products to distributors, retailers, or directly to your B2B
                                        customers through our network.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Multi-Channel Fulfillment -->
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
