{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('title', 'Book Delivery | ' . config('app.name'))
@section('content')

    <div class="container-fluid">
        <!-- Page Title Section -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <div class="page-title-right">
                            <a href="{{ route('bookdeliverypro') }}"><button class="btn btn-success">All Orders</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form Section -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Customer Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bookingdelivery') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-4 mt-3">
                                    <label for="example-email-input" class="form-label">Customer Name</label>
                                    <input class="form-control" placeholder="Enter Customer Name" name="customername"
                                        type="text" value="" id="example-email-input">
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <label for="example-email-input" class="form-label">Mobile Number</label>
                                    <input class="form-control" placeholder="Enter Mobile Number" name="mobilebumber"
                                        type="text" value="" id="example-email-input">
                                </div>
                                <div class="col-lg-4 mt-3">
                                    <label for="example-email-input" class="form-label">Email</label>
                                    <input class="form-control" placeholder="Enter Email" name="email" type="email"
                                        value="" id="example-email-input">
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label for="example-email-input" class="form-label">Billing Address</label>
                                    <textarea rows="4" name="address" class="form-control resize-none" placeholder="Billing Address..."></textarea>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label for="example-email-input" class="form-label">Shipping Address</label>
                                    <textarea rows="4" name="deliverydetails" class="form-control resize-none" placeholder="Shipping Address..."></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Order Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="col-lg-8">
                                <select id="SelExample" class="form-select">
                                    <option value="" selected>--select product</option>
                                    @foreach ($productdata as $row)
                                        <option value="{{ $row->id }}">{{ $row->productname }}-{{ $row->id }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <button onclick="getProduct()" class="btn btn-success waves-effect waves-light">Add</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Bordered Tables -->
                            <table class="table table-bordered table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                    {{-- <tr>
                                        <th scope="row">101</th>
                                        <td>Implement new UX</td>
                                        <td>$4,521</td>
                                        <td>
                                            <input class="form-control" placeholder="Enter Discount" name="discount"
                                                type="text" value="" id="example-email-input">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger fs-6"
                                                onclick="confirmDelete('{{ $row->id }}')">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </button>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#SelExample").select2();
            });

            function getProduct() {
                var selectedproductid = $("#SelExample").val();
                console.log(selectedproductid);

                $.ajax({
                    url: "/getproducts/" + selectedproductid,
                    type: "GET",
                    success: function(data) {
                        console.log(data);
                        $("#tablebody").empty();
                        var tr = `
                        <tr>
                            <th scope="row">${data.id}</th>
                            <td>${data.productname}</td>
                            <td>${data.price}</td>
                            <td>
                                <input class="form-control" placeholder="Enter Discount" name="discount"
                                    type="text" value="" id="example-email-input">
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger fs-6">
                                    <i class="ri-delete-bin-5-fill"></i>
                                </button>
                            </td>
                        </tr>
                    `;
                        $("#tablebody").append(tr);
                    }
                });
            }
        </script>
    @endsection
