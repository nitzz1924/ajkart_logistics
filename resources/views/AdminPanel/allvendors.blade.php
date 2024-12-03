{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
<x-app-layout>
    @section('title', 'All Users')
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered border-light hover dt-responsive nowrap"
                                style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>Verification Status</th>
                                        <th>Activation Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($vendors as $index => $data)
                                        <tr>
                                            <th>{{ $index + 1 }}</th>
                                            <td>{{ $data->username }}</td>
                                            <td>{{ $data->mobilenumber }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>
                                                @if ($data->verifystatus == '1')
                                                    <span class="badge bg-success fs-6">Verified</span>
                                                @else
                                                    <span class="badge bg-danger fs-6">Not Verified</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div
                                                    class="form-check form-switch form-switch-custom form-switch-success">
                                                    <input data-id="{{ $data->id }}" class="form-check-input"
                                                        type="checkbox" role="switch"
                                                        id="square-switch{{ $data->id }}"
                                                        {{ $data->activationstatus == 'activate' ? 'checked' : '' }}
                                                        switch="bool">
                                                </div>
                                                <input type="hidden" data-id="userid-{{ $data->id }}"
                                                    name="userid" value="{{ $data->id }}" </td>
                                            <td>
                                                <div class="hstack gap-3 flex-wrap">
                                                   <a href="{{ route('myorders',['id'=>$data->id]) }}">
                                                        <button class="btn btn-soft-dark btn-border">View Warehouse Stock</button>
                                                   </a>
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
                <form action="#" method="POST" enctype="multipart/form-data">
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

    <!--Activation Status-->
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').change(function() {
                var userid = $(this).data('id');
                var status = $(this).is(':checked') ? 'activate' : 'deactivate';

                $.ajax({
                    url: '{{ route('updateactivationstatus') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: userid,
                        status: status
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Success!",
                                text: "Status Updated..!",
                                icon: "success",
                                confirmButtonText: "OK"
                            })
                        } else {
                            Swal.fire("Error", "Failed to update Activation status.",
                                "error");
                        }
                    },
                    error: function() {
                        swal("Error", "An error occurred.", "error");
                    }
                });
            });
        });
    </script>

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
</x-app-layout>
