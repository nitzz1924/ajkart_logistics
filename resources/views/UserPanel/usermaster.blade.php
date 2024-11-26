{{-- #---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏---------------------------” --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('content')
@section('title', 'User Master | AJ-KART Logistics')
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
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">dashboard</a></li>&nbsp;/
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('createusermaster') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <div class="col-lg-4">
                                <label>Select Category</label>
                                <select name="type" class="form-select mb-3" aria-label="Default select example">
                                    <option value="Master">--select a parent category--</option>
                                    @foreach ($data as $row)
                                    <option value="{{ $row->label}}">{{ $row->label}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="valueid">Category Label</label>
                                <input class="form-control" placeholder="Enter Category Name" name="label" type="text"
                                    id="valueid" required>
                            </div>
                            <div class="col-lg-4 mt-3 d-flex align-items-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table id="example" class="table table-bordered dt-responsive nowrap" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Label</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            @foreach ($data as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row->label }}</td>
                                <td>{{ $row->type }}</td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                data-car-list="{{ json_encode($row) }}"
                                                class="px-2 text-primary fs-5 editbtnmodal"><i class="ri-edit-2-fill"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Edit"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="button" class="btn text-danger fs-5"
                                                onclick="confirmDelete('{{ $row->id }}')">
                                                <i class="ri-delete-bin-5-fill"></i>
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
    <div id="myModal" class="modal zoomIn" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel fs-5 fw-bold text-black">Edit Master</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('updateusermaster') }}" method="POST">
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
                        window.location.href = "/deleteusermaster/" + id;
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


        // Populate Edit Modal with Data
        $('#table-body').on('click', '.editbtnmodal', function() {
            const masterdata = $(this).data('car-list');
            console.log(masterdata);
            $('#modalbodyedit').html(`
                    <div class="mb-0 row">
                        <div class="col-lg-6">
                         <label>Select Category</label>
                        <select name="type" class="form-select" id="subcategory" required>
                            <option value="">--select master category--</option>
                            @foreach ($data as $row)
                                <option value="{{ $row->label }}" ${masterdata.type === '{{ $row->label }}' ? 'selected' : ''}>{{ $row->label }}</option>
                            @endforeach
                        </select>
                         <input type="hidden" name="masterid" value="${masterdata.id}" id="">
                        </div>
                        <div class="col-lg-6">
                            <label>Value</label>
                            <input class="form-control" name="label" type="text" value="${masterdata.label}" required>
                        </div>
                    </div>
                `);
        });
</script>
@endsection
