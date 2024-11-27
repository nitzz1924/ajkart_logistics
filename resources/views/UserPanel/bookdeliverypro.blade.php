
{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('title', 'Book Delivery Product | ' . config('app.name'))
@section('content')
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
    <!-- Page Title Section -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">@yield('title')</h4>
                <div class="page-title-right">
                 <a href="{{ route('bookdeliveryform') }}"><button class="btn btn-success">Create Order</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table id="example" class="table table-bordered border-light hover dt-responsive nowrap"
                        style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Order Details</th>
                                <th>Customer Details</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @foreach ($bookeddata as $index => $row)
                            <tr>
                                <td>
                                    <div>
                                        <div>
                                            #Order{{ $row->id }}
                                        </div>
                                        <div>
                                            {{ $row->created_at->format('d M Y | h:i A') }}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <div>
                                            {{ $row->customername }}
                                        </div>
                                        <div>
                                            {{ $row->email }}
                                        </div>
                                        <div>
                                            +91-{{ $row->mobilebumber }}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($row->status == 'Processing')
                                    <span class="badge badge-label bg-info  fs-6"><i
                                            class="mdi mdi-circle-medium"></i>Processing</span>
                                    @elseif($row->status == 'Completed')
                                    <span class="badge badge-label bg-success fs-6"><i
                                            class="mdi mdi-circle-medium"></i>Completed</span>
                                    @endif
                                </td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                data-pricing="{{ json_encode($row) }}"
                                                class="px-2 btn btn-primary fs-6 editbtnmodal"><i class="ri-edit-2-fill"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Edit"></i>Edit</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn btn-danger fs-6"
                                                onclick="confirmDelete('{{ $row->id }}')">
                                                <i class="ri-delete-bin-5-fill"></i> Delete
                                            </button>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fadeInRight" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content rounded-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel fs-5 fw-bold text-black">Edit Invetory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" id="modalbodyedit">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn  text-white rounded-2 waves-effect waves-light"
                            style="background-color: #222222">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function confirmDelete(id) {
            Swal.fire({
                    title: "Are you sure?",
                    html: "You want to delete?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#222222",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel"
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/deleteinventory/" + id;
                    }
                });
        }
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

        //Showing Image Preview after selecting....
        function readURL(input) {
            console.log(input);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagemain').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
