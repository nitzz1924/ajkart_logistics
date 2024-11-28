{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('title', 'Book Delivery | ' . config('app.name'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                @if (Auth::guard('customer')->user())
                                    <h4 class="fs-16 mb-1">Welcome {{ Auth::guard('customer')->user()->username }}</h4>
                                @else
                                    <h4 class="fs-16 mb-1">Welcome Guest User</h4> </span>
                                @endif

                                <p class="text-muted mb-0">
                                    Here's what's happening with your store today.
                                </p>
                            </div>
                        </div>
                        <!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #000000;">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    {{-- <div class="overflow-hidden">
                                       <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                    </div> --}}
                                    <div class="overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Products
                                        </p>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="mt-1">
                                            <span class="counter-value" data-target="10">10</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #000000;">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    {{-- <div class="overflow-hidden">
                                       <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                    </div> --}}
                                    <div class="overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Products
                                        </p>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="mt-1">
                                            <span class="counter-value" data-target="10">10</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #000000;">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    {{-- <div class="overflow-hidden">
                                       <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                    </div> --}}
                                    <div class="overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Products
                                        </p>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="mt-1">
                                            <span class="counter-value" data-target="10">10</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #000000;">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    {{-- <div class="overflow-hidden">
                                       <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                    </div> --}}
                                    <div class="overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Products
                                        </p>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="mt-1">
                                            <span class="counter-value" data-target="10">10</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #000000;">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    {{-- <div class="overflow-hidden">
                                       <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                    </div> --}}
                                    <div class="overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Products
                                        </p>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="mt-1">
                                            <span class="counter-value" data-target="10">10</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate rounded-0 py-0" style="border-bottom: 4px solid #000000;">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    {{-- <div class="overflow-hidden">
                                       <img src="{{asset('assets/images/send.png')}}" alt="" height="30" width="30">
                                    </div> --}}
                                    <div class="overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Products
                                        </p>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="mt-1">
                                            <span class="counter-value" data-target="10">10</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">
                                    Recent Orders
                                </h4>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-soft-info btn-sm">
                                        <i class="ri-file-list-3-line align-middle"></i>
                                        Generate Report
                                    </button>
                                </div>
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Vendor</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="apps-ecommerce-order-details.html"
                                                        class="fw-medium link-primary">#VZ2112</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="assets/images/users/avatar-1.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">Alex Smith</div>
                                                    </div>
                                                </td>
                                                <td>Clothes</td>
                                                <td>
                                                    <span class="text-success">$109.00</span>
                                                </td>
                                                <td>Zoetic Fashion</td>
                                                <td>
                                                    <span class="badge bg-success-subtle text-success">Paid</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">
                                                        5.0<span class="text-muted fs-11 ms-1">(61 votes)</span>
                                                    </h5>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="apps-ecommerce-order-details.html"
                                                        class="fw-medium link-primary">#VZ2111</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">Jansh Brown</div>
                                                    </div>
                                                </td>
                                                <td>Kitchen Storage</td>
                                                <td>
                                                    <span class="text-success">$149.00</span>
                                                </td>
                                                <td>Micro Design</td>
                                                <td>
                                                    <span class="badge bg-warning-subtle text-warning">Pending</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">
                                                        4.5<span class="text-muted fs-11 ms-1">(61 votes)</span>
                                                    </h5>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="apps-ecommerce-order-details.html"
                                                        class="fw-medium link-primary">#VZ2109</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="assets/images/users/avatar-3.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">Ayaan Bowen</div>
                                                    </div>
                                                </td>
                                                <td>Bike Accessories</td>
                                                <td>
                                                    <span class="text-success">$215.00</span>
                                                </td>
                                                <td>Nesta Technologies</td>
                                                <td>
                                                    <span class="badge bg-success-subtle text-success">Paid</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">
                                                        4.9<span class="text-muted fs-11 ms-1">(89 votes)</span>
                                                    </h5>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="apps-ecommerce-order-details.html"
                                                        class="fw-medium link-primary">#VZ2108</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="assets/images/users/avatar-4.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">Prezy Mark</div>
                                                    </div>
                                                </td>
                                                <td>Furniture</td>
                                                <td>
                                                    <span class="text-success">$199.00</span>
                                                </td>
                                                <td>Syntyce Solutions</td>
                                                <td>
                                                    <span class="badge bg-danger-subtle text-danger">Unpaid</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">
                                                        4.3<span class="text-muted fs-11 ms-1">(47 votes)</span>
                                                    </h5>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <td>
                                                    <a href="apps-ecommerce-order-details.html"
                                                        class="fw-medium link-primary">#VZ2107</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-2">
                                                            <img src="assets/images/users/avatar-6.jpg" alt=""
                                                                class="avatar-xs rounded-circle" />
                                                        </div>
                                                        <div class="flex-grow-1">Vihan Hudda</div>
                                                    </div>
                                                </td>
                                                <td>Bags and Wallets</td>
                                                <td>
                                                    <span class="text-success">$330.00</span>
                                                </td>
                                                <td>iTest Factory</td>
                                                <td>
                                                    <span class="badge bg-success-subtle text-success">Paid</span>
                                                </td>
                                                <td>
                                                    <h5 class="fs-14 fw-medium mb-0">
                                                        4.7<span class="text-muted fs-11 ms-1">(161 votes)</span>
                                                    </h5>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                        </tbody>
                                        <!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div>
                            </div>
                        </div>
                        <!-- .card-->
                    </div>
                    <!-- .col-->
                </div>
                <!-- end row-->
            </div>
            <!-- end .h-100-->
        </div>
        <!-- end col -->
    </div>
</div>
@endsection
