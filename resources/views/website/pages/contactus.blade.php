@extends('website.layouts.websitemain')
@section('title', 'Contact Us | ' . config('app.name'))
@section('content')


    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="{{ route('home') }}"> Home </a> / Contact Us</h4>
                    <h3>Contact Us</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
        ==================================================-->


    <!-- Start: Contact  Section
        ==================================================-->
    <section class="contact-section contact_page">
        <div class="container">
            <!-- Start: Heading -->
            <div class="base-header">
                <h3>Get in touch</h3>
            </div>
            <!-- End:  heading -->
            <!--  Content  -->
            <div class="inner-contact">
                <div class="row">
                    {{-- <div class="col-sm-12">
                        <div id="map" class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.023938894304!2d-81.38341548467582!3d19.324767486945657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f2587a9a0b98737%3A0x38fe616bb6df631f!2s638+W+Bay+Rd%2C+Cayman+Islands!5e0!3m2!1sen!2sus!4v1549260798680"></iframe>
                        </div>
                    </div> --}}
                    <div class="row contactus">
                        <div class="footer_contact col-md-4 col-xs-12 col-sm-12"><i class="icon_pin_alt"></i>
                            <p>Address : company name </p>
                            <h4>California, USA</h4>
                        </div>
                        <div class="footer_contact col-md-4 col-xs-12 col-sm-12"><i class="icon_phone"></i>
                            <p>Toll Free Number</p>
                            <h4>0 (245) 378-6748</h4>
                        </div>
                        <div class="footer_contact col-md-4 col-xs-12 col-sm-12"><i class="icon_clock_alt"></i>
                            <p>Opening Hours</p>
                            <h4>Mon - Fri 9am - 6 pm</h4>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <!--  Contact Form  -->
                        <div class="contact-form">
                            <form method="post" action="https://tidytheme.xyz/blackgallery/convertar/html/mailer.php"
                                id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <input class="con-field" name="name" id="name" type="text"
                                                placeholder="Name">
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="con-field" name="email" id="email" type="text"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-lg-12">
                                            <input class="con-field" name="messageForm" id="messageForm" type="text"
                                                placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                                            <div class="submit-area">
                                                <input type="submit" id="submit-contact" class="btn-alt"
                                                    value="Send Message">
                                                <div id="msg" class="message"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- End:Contact Form  -->
                    </div>
                </div>
                <!-- row /- -->
            </div>
            <!-- End:Content  -->
        </div>
        <!-- container /- -->
    </section>
    <!--End Contact Section
        ==================================================-->


@endsection
