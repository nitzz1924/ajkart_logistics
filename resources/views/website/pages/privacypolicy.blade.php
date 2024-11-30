@extends('website.layouts.websitemain')
@section('title', 'Privacy Policy | ' . config('app.name'))
@section('content')

    <!-- header -->
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h4><a href="/"> Home </a> / Privacy Policy </h4>
                    <h3>Our Privacy Policy</h3>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    <!--/. header -->

    <!-- End: Header Section
            ==================================================-->

    <section class="privacy-policy-section py-5">
        <div class="container">

            <div class="policy-content">
                <h4 class="mt-4">1. Information We Collect</h4>
                <p>We may collect and process the following types of information:</p>
                <ul>
                    <li><strong>Personal Information:</strong> Name, contact details (email, phone, address), and payment
                        details.</li>
                    <li><strong>Non-Personal Information:</strong> IP address, browser type, device details, and website
                        usage data.</li>
                    <li><strong>Shipping Information:</strong> Recipient’s name, address, and delivery location details.
                    </li>
                </ul>

                <h4 class="mt-4">2. How We Use Your Information</h4>
                <p>We use your information for the following purposes:</p>
                <ul>
                    <li><strong>Service Delivery:</strong> To process shipments and manage requests.</li>
                    <li><strong>Customer Support:</strong> To address inquiries and resolve issues.</li>
                    <li><strong>Personalization:</strong> To tailor our services for a better experience.</li>
                    <li><strong>Marketing:</strong> To send updates, offers, and news (with consent).</li>
                    <li><strong>Compliance:</strong> To meet legal obligations and prevent fraud.</li>
                </ul>

                <h4 class="mt-4">3. Information Sharing and Disclosure</h4>
                <p>We do not sell or rent your information. We may share your data in these scenarios:</p>
                <ul>
                    <li><strong>With Service Providers:</strong> For logistics, payments, and technical support.</li>
                    <li><strong>Legal Obligations:</strong> When required by law or to protect our rights.</li>
                    <li><strong>Business Transfers:</strong> During mergers, acquisitions, or asset sales.</li>
                </ul>

                <h4 class="mt-4">4. Data Retention</h4>
                <p>We retain your data only as long as necessary for the purposes outlined or as required by law.</p>

                <h4 class="mt-4">5. Cookies and Tracking Technologies</h4>
                <p>We use cookies to enhance your experience, analyze traffic, and remember preferences. You can manage
                    cookies in your browser settings.</p>

                <h4 class="mt-4">6. Security Measures</h4>
                <p>We employ security measures like encryption, regular assessments, and restricted access to protect your
                    data. However, no system is completely secure.</p>

                <h4 class="mt-4">7. Your Rights</h4>
                <p>You have the following rights regarding your personal data:</p>
                <ul>
                    <li>Request a copy of your data.</li>
                    <li>Rectify inaccurate information.</li>
                    <li>Request data deletion, subject to legal obligations.</li>
                    <li>Unsubscribe from marketing communications.</li>
                </ul>
                <p>Contact us at <strong>support@ajkartlogistic.com</strong> to exercise these rights.</p>

                <h4 class="mt-4">8. Third-Party Links</h4>
                <p>Our website may link to external sites. We are not responsible for their privacy practices. Review their
                    policies before sharing information.</p>

                <h4 class="mt-4">9. Children's Privacy</h4>
                <p>Our services are not directed at individuals under 18, and we do not knowingly collect their data.</p>

                <h4 class="mt-4">10. Updates to This Policy</h4>
                <p>We may update this policy from time to time. Changes will be posted here with the effective date.</p>

                <h4 class="mt-4">11. Contact Us</h4>
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
