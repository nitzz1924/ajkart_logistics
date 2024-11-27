{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('title', 'Company Setup')
@section('content')

<div class="container-fluid">
    <!-- Page Title Section -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">@yield('title')</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">dashboard</a></li>&nbsp;/
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if($companydata == null)
    <form action="{{ route('registercompany') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Company Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Company Name</label>
                                <input class="form-control" placeholder="Enter Customer Name" name="companyname"
                                    type="text" value="" id="example-email-input">
                                <input type="hidden" name="product_data" id="product_data">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Logo</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="companylogo"
                                    type="file" value="" id="example-email-input">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Registered Office Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">City</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="city" type="text"
                                    value="" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">State/Province</label>
                                <input class="form-control" placeholder="Enter Email" name="state" type="text" value=""
                                    id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Country</label>
                                <input class="form-control" placeholder="Enter Email" name="country" type="text"
                                    value="India" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Postal Code/ZIP Code</label>
                                <input class="form-control" placeholder="Enter Email" name="pincode" type="text"
                                    value="" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Contact Number</label>
                                <input class="form-control" placeholder="Enter Email" name="contactnumber" type="text"
                                    value="" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Email Address</label>
                                <input class="form-control" placeholder="Enter Email" name="email" type="email" value=""
                                    id="example-email-input">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <label for="example-email-input" class="form-label">Office Address</label>
                                <textarea rows="4" name="officeaddress" class="form-control resize-none"
                                    placeholder="Office Address..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Upload Company Documents</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Company Registration
                                    Document/GST</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="registrationimage"
                                    type="file" value="" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">PAN Card</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="pancardimage"
                                    type="file" value="" id="example-email-input" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @else
    <form action="{{ route('updateregistercompany') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @foreach ($companydata as $data)
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Company Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Company Name</label>
                                <input class="form-control" placeholder="Enter Customer Name" name="companyname"
                                    type="text" value="{{$data->companyname}}" id="example-email-input">
                                    <input type="hidden" name="recordid" value="{{$data->id}}">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Logo</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="companylogo"
                                    type="file" value="" id="example-email-input">

                            </div>
                            <div class="col-lg-4 d-flex align-items-center mt-4">
                                Logo
                                <div class="img-preview">
                                    <a href="{{ asset('assets/images/Services'.$data->companylogo) }}" download="{{ $data->companylogo }}">
                                        <img src="{{ asset('assets/images/Services/'.$data->companylogo) }}" width="150" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Registered Office Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">City</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="city" type="text"
                                    value="{{$data->city}}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">State/Province</label>
                                <input class="form-control" placeholder="Enter Email" name="state" type="text" value="{{$data->state}}"
                                    id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Country</label>
                                <input class="form-control" placeholder="Enter Email" name="country" type="text"
                                    value="{{$data->country}}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Postal Code/ZIP Code</label>
                                <input class="form-control" placeholder="Enter Email" name="pincode" type="text"
                                    value="{{$data->pincode}}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Contact Number</label>
                                <input class="form-control" placeholder="Enter Email" name="contactnumber" type="text"
                                    value="{{$data->contactnumber}}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Email Address</label>
                                <input class="form-control" placeholder="Enter Email" name="email" type="email" value="{{$data->email}}"
                                    id="example-email-input">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <label for="example-email-input" class="form-label">Office Address</label>
                                <textarea rows="4" name="officeaddress" class="form-control resize-none"
                                    placeholder="Office Address...">{{$data->officeaddress}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Upload Company Documents</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3 d-flex flex-column">
                                <div>
                                    <label for="example-email-input" class="form-label">Company Registration
                                        Document/GST</label>
                                    <input class="form-control" placeholder="Enter Mobile Number" name="registrationimage"
                                        type="file" value="" id="example-email-input">
                                </div>
                                <div class="img-preview mt-3">
                                    <a href="{{ asset('assets/images/Services'.$data->registrationimage) }}" download="{{ $data->registrationimage }}">
                                        <img src="{{ asset('assets/images/Services/'.$data->registrationimage) }}" width="300" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3 d-flex flex-column">
                                <div>
                                    <label for="example-email-input" class="form-label">PAN Card</label>
                                    <input class="form-control" placeholder="Enter Mobile Number" name="pancardimage"
                                        type="file" value="" id="example-email-input">
                                </div>
                                <div class="img-preview mt-3">
                                    <a href="{{ asset('assets/images/Services'.$data->pancardimage) }}" download="{{ $data->pancardimage }}">
                                        <img src="{{ asset('assets/images/Services/'.$data->pancardimage) }}" width="300" alt="logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </form>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @endsection
