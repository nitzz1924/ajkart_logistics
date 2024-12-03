{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
<x-app-layout>
    @section('title', 'All Delivery Registrations')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }
    </style>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex justify-content-end">
                        <a href="{{ route('registerdeliveryboy') }}">
                            <button type="button" class="btn btn-success  waves-effect waves-light"><i
                                    class="bx bx-user-plus align-middle me-2"></i>Register New</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered border-light hover dt-responsive nowrap"
                                style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Delivery Boy Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($deliverys as $index => $data)
                                    <tr>
                                        <th>{{ $index + 1 }}</th>
                                        <td>{{ $data->fullname }}</td>
                                        <td>{{ $data->mobilenumber }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>
                                            @if ($data->status == 'unapproved')
                                            <span class="badge bg-danger fs-6">Unapproved</span>
                                            @elseif($data->status == 'approved')
                                            <span class="badge bg-success fs-6">Approved</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="hstack gap-3 flex-wrap">
                                                <button class="btn btn-outline-primary btn-border editbtnmodal" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                data-record="{{ json_encode($data) }}"><i class="ri-edit-2-line"></i></button>
                                                <button onclick="confirmDelete('{{ $data->id }}','{{ addslashes($data->fullname) }}')" class="btn btn-soft-danger btn-border"><i class="ri-delete-bin-line"></i></button>

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal flip" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('updatedelivery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="modalbody">
                        {{-- Modal Body Appends here --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        // DataTable Initialization
        $(document).ready(function() {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                },

            });
        });
    </script>
    <script>
        function confirmDelete(id, title) {
            Swal.fire({
                    title: "Are you sure?",
                    html: "You want to delete  <strong style='color: red;'>" + title + "</strong> ?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#222222",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/deletedelivery/" + id;
                    }
                });
        }
    </script>

    <!--Edit Functionality-->
    <script>
        $('#table-body').on('click', '.editbtnmodal', function() {
            var deliverdata = $(this).data('record');
            console.log(deliverdata);
            $('#modalbody').empty();

            var modalbody = `
               <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="fullname" class="form-control"
                                                placeholder="Enter Full Name" value="${deliverdata.fullname}" autocomplete="off">
                                            <input type="hidden" name="deliveryid" value="${deliverdata.id}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Email" value="${deliverdata.email}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" name="mobilenumber" class="form-control"
                                                placeholder="Enter Phone Number" value="${deliverdata.mobilenumber}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">City</label>
                                            <input type="text" name="city" class="form-control"
                                                placeholder="Enter City" value="${deliverdata.city}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">State/Province</label>
                                            <input type="text" name="state" class="form-control"
                                                placeholder="Enter State" value="${deliverdata.state}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label class="form-label">Zip/Postal Code</label>
                                            <input type="text" name="zipcode" class="form-control"
                                                placeholder="Enter Pincode" value="${deliverdata.zipcode}">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                         <label class="form-label">Change Status</label>
                                        <select name="status" class="form-select mb-3" aria-label="Default select example">
                                            <option selected>--select--</option>
                                            <option value="approved" ${deliverdata.status == 'approved' ? 'selected' : ''}>Approved</option>
                                            <option value="unapproved" ${deliverdata.status == 'unapproved' ? 'selected' : ''}>Unapproved</option>
                                    </select>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <label for="example-email-input" class="form-label">Residential Address</label>
                                        <textarea rows="4" name="address" class="form-control resize-none"
                                            placeholder="Full Address...">${deliverdata.address}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
            `;
            $('#modalbody').append(modalbody);
        });
    </script>
</x-app-layout>
