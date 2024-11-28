{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.DeliveryBoyLayouts.deliveryboymain')
@section('title', 'Home | ' . config('app.name'))
@section('content')
<div class="container-fluid p-4 desktop-view">
    {{-- Header bar --}}
    <div class="row">
        <div class="col-8">
            <div class="d-flex justify-content-start align-items-center">
                <a href="/userprofile">
                    <div class="p-2 rounded-pill bg-danger">
                        <i class='bx bx-user fs-5 text-white'></i>
                    </div>
                </a>
                <div class="ms-1 fs-5">
                    @if (Auth::guard('delivery')->user())
                    Welcome, {{ Auth::guard('delivery')->user()->fullname }}
                    @else
                    Guest User
                    @endif
                </div>
            </div>
        </div>
        <div class="col-4">
            <a href="#">
                <div class="d-flex justify-content-end">
                    <div class="p-2">
                        <i class='bx bx-bell fs-2 text-danger'></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Wallet box --}}
    <div class="row my-3">
        <div class="wallet-box">
            <div class="balance text-white">
                <div class="wallet-amount">
                   Welcome Back!
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="d-flex justify-content-between align-content-center">
            <div class="sectionHeading">
               Today's Orders
            </div>
            <div>
                <a href="#" class="btn btn-outline-dark border-0 fs-6">See more</a>
            </div>
        </div>
        <div class="p-2 shadow-lg rounded-4 d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <i class='bx bx-minus-circle text-danger fs-1'></i>
                </div>
                <div class="fs-5">
                   Samsung S23 ULTRA 5G
                    <div class="">
                        <div class="text-muted fs-6">
                         Processing
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fs-3 text-muted fw-bold">
                    <i class='bx bx-rupee'></i>150000
                </div>
            </div>
        </div>
        <div class="p-2 shadow-lg rounded-4 d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <i class='bx bx-minus-circle text-danger fs-1'></i>
                </div>
                <div class="fs-5">
                   Samsung S23 ULTRA 5G
                    <div class="">
                        <div class="text-muted fs-6">
                         Processing
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fs-3 text-muted fw-bold">
                    <i class='bx bx-rupee'></i>150000
                </div>
            </div>
        </div>
        <div class="p-2 shadow-lg rounded-4 d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <i class='bx bx-minus-circle text-danger fs-1'></i>
                </div>
                <div class="fs-5">
                   Samsung S23 ULTRA 5G
                    <div class="">
                        <div class="text-muted fs-6">
                         Processing
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fs-3 text-muted fw-bold">
                    <i class='bx bx-rupee'></i>150000
                </div>
            </div>
        </div>
        <div class="p-2 shadow-lg rounded-4 d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <i class='bx bx-minus-circle text-danger fs-1'></i>
                </div>
                <div class="fs-5">
                   Samsung S23 ULTRA 5G
                    <div class="">
                        <div class="text-muted fs-6">
                         Processing
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="fs-3 text-muted fw-bold">
                    <i class='bx bx-rupee'></i>150000
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
