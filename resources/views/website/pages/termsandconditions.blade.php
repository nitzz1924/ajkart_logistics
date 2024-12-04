@extends('website.layouts.websitemain')
@section('title', 'Terms And Conditions | ' . config('app.name'))
@section('content')

    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="/"> Home </a> / Terms And Conditions </h4>
                    <h3>Our Terms And Conditions</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
        ==================================================-->

    <section class="terms-section py-5">
        <div class="container">
            <div class="terms-content">
                <h4 class="mt-4">1. Acceptance of Terms</h4>
                <p>By accessing or using our services, you agree to be bound by these Terms and Conditions. If you do not
                    agree, please refrain from using our services.</p>

                <h4 class="mt-4">2. Services Overview</h4>
                <p>AJ Kart Logistic offers logistics and shipping services. These terms govern the use of our services,
                    including website access and shipment processing.</p>

                <h4 class="mt-4">3. User Responsibilities</h4>
                <ul>
                    <li>You must provide accurate and complete information for shipments and other service-related requests.
                    </li>
                    <li>You agree not to use our services for illegal purposes or to ship prohibited items.</li>
                    <li>You are responsible for complying with local laws and regulations regarding your shipments.</li>
                </ul>

                <h4 class="mt-4">4. Payment and Fees</h4>
                <ul>
                    <li>All payments for our services must be made in advance unless otherwise agreed.</li>
                    <li>We reserve the right to change our fees at any time, with prior notice to customers.</li>
                    <li>Non-payment may result in suspension or cancellation of services.</li>
                </ul>

                <h4 class="mt-4">5. Shipping and Delivery</h4>
                <ul>
                    <li>We aim to deliver shipments on time, but delays may occur due to unforeseen circumstances.</li>
                    <li>We are not liable for delays caused by weather, natural disasters, or other events beyond our
                        control.</li>
                    <li>It is your responsibility to ensure the recipient’s availability at the delivery address.</li>
                </ul>

                <h4 class="mt-4">6. Prohibited Items</h4>
                <p>The following items are prohibited from being shipped through our services:</p>
                <ul>
                    <li>Hazardous or illegal substances.</li>
                    <li>Perishable items without prior approval.</li>
                    <li>Weapons, explosives, or flammable materials.</li>
                </ul>

                <h4 class="mt-4">7. Limitation of Liability</h4>
                <p>AJ Kart Logistic is not liable for:</p>
                <ul>
                    <li>Loss or damage to shipments caused by improper packaging or sender negligence.</li>
                    <li>Indirect or consequential damages resulting from the use of our services.</li>
                    <li>Losses exceeding the declared shipment value.</li>
                </ul>

                <h4 class="mt-4">8. Intellectual Property</h4>
                <p>All content, trademarks, and materials on our website are the property of AJ Kart Logistic. Unauthorized
                    use or reproduction is prohibited.</p>

                <h4 class="mt-4">9. Termination</h4>
                <p>We reserve the right to terminate or suspend services to users who violate these terms, engage in
                    fraudulent activities, or misuse our services.</p>

                <h4 class="mt-4">10. Changes to Terms</h4>
                <p>We may update these Terms and Conditions periodically. Continued use of our services constitutes
                    acceptance of the updated terms.</p>

                <h4 class="mt-4">11. Governing Law</h4>
                <p>These Terms and Conditions are governed by the laws of [Insert Jurisdiction]. Any disputes will be
                    resolved under the exclusive jurisdiction of the courts in [Insert Jurisdiction].</p>

                <h4 class="mt-4">12. Contact Us</h4>
                <p>If you have any questions or concerns, please contact us:</p>
                <ul>
                    <li><strong>AJ Kart Logistic</strong></li>
                    <li>Email: support@ajkartlogistic.com</li>
                    <li>Phone: [Insert Phone Number]</li>
                    <li>Address: [Insert Address]</li>
                </ul>
            </div>
        </div>
    </section>


@endsection
