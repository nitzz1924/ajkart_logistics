{{--#---------------------------------------------------🙏🔱देवा श्री गणेशा 🔱🙏---------------------------”--}}
@section('title', 'Delivery Registration')
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('registerboy') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header align-items-center d-flex justify-content-end">
                            <a href="{{ url()->previous() }}">
                                <button type="button" class="btn btn-dark btn-sm  waves-effect waves-light"><i class="ri-arrow-left-line align-middle me-2"></i>Go Back</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="fullname" class="form-control"
                                                placeholder="Enter Full Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" name="mobilenumber" class="form-control"
                                                placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control"
                                                placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">State/Province</label>
                                            <input type="text" name="state" class="form-control"
                                                placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Zip/Postal Code</label>
                                            <input type="text" name="zipcode" class="form-control"
                                                placeholder="Enter Pincode">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <label for="example-email-input" class="form-label">Residential Address</label>
                                        <textarea rows="4" name="address" class="form-control resize-none"
                                            placeholder="Full Address..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
