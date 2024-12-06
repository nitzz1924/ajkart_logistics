{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
<x-app-layout>
    @section('title', 'All Orders')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }

        option[value="processing"] {
            color: blue;
            font-size: 15px;
        }

        option[value="delivered"] {
            color: green;
            font-size: 15px;
        }

        option[value="postponed"] {
            color: rgb(88, 88, 0);
            font-size: 15px;
        }

        option[value="cancel"] {
            color: red;
            font-size: 15px;
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Filter</h4>
                    </div>
                    <div class="card-body">
                        <div class="listjs-table" id="customerList">
                            <form>
                                <div class="row g-4 mb-3">
                                    <div
                                        class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                        <div>
                                            <label for="exampleInputdate" class="form-label">From</label>
                                            <input type="date" name="datefrom" class="form-control" id="datefrom">
                                        </div>
                                        <div>
                                            <label for="exampleInputdate" class="form-label">To</label>
                                            <input type="date" name="dateto" class="form-control" id="dateto">
                                        </div>
                                        <div>
                                            <button type="button" style="background-color: #22005a"
                                                class="btn text-white add-btn datebtn"><i
                                                    class="ri-search-eye-line align-bottom me-1"></i>Search</button>
                                        </div>
                                    </div>
                                    <div
                                        class="col-sm-auto d-flex justify-content-sm-start gap-2 align-items-end flex-wrap">
                                        <label class="">Filter By Status</label>
                                        <select name="servicetype" class="form-select masterselect" id="servicetypeid"
                                            required>
                                            <option value="" selected>--select status--</option>
                                            <option value="processing">Processing</option>
                                            <option value="delivered">Delivered</option>
                                            <option value="postponed">Postponed</option>
                                            <option value="cancel">Cancel</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
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
                                    <th>Company Details</th>
                                    <th>Status</th>
                                    <th>Change Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($allorders as $index => $row)
                                @php
                                $companydetails = json_decode($row->company_details);
                                @endphp
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
                                        <div>
                                            <div>
                                                {{ $companydetails->companyname }}
                                            </div>
                                            <div>
                                                {{ $companydetails->email }}
                                            </div>
                                            <div>
                                                {{ $companydetails->officeaddress }}
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($row->status == 'processing')
                                        <span class="badge badge-label bg-info  fs-6"><i
                                                class="mdi mdi-circle-medium"></i>Processing</span>
                                        @elseif($row->status == 'delivered')
                                        <span class="badge badge-label bg-success fs-6"><i
                                                class="mdi mdi-circle-medium"></i>Delivered</span>
                                        @elseif($row->status == 'postponed')
                                        <span class="badge badge-label bg-secondary fs-6"><i
                                                class="mdi mdi-circle-medium"></i>Postponed</span>
                                        @elseif($row->status == 'cancel')
                                        <span class="badge badge-label bg-danger fs-6"><i
                                                class="mdi mdi-circle-medium"></i>Cancelled</span>
                                        @endif
                                    </td>
                                    <td>
                                        <select name="status" data-id="{{ $row->id }}"
                                            class="form-select statusselect" id="" required>
                                            <option value="processing"
                                                {{ $row->status == 'processing' ? 'selected' : '' }}>Processing
                                            </option>
                                            <option value="delivered"
                                                {{ $row->status == 'delivered' ? 'selected' : '' }}>Delivered
                                            </option>
                                            <option value="postponed"
                                                {{ $row->status == 'postponed' ? 'selected' : '' }}>Postponed
                                            </option>
                                            <option value="cancel"
                                                {{ $row->status == 'cancel' ? 'selected' : '' }}>
                                                Cancel</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="hstack gap-3 flex-wrap">
                                            <a
                                                href="{{ route('adminorderinvoice', ['orderid' => $row->id, 'userid' => $row->userid]) }}">
                                                <button class="btn btn-soft-dark btn-border">View Invoice</button>
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


    <!--Order Status-->
    <script>
        function UpdateOrderStatus() {
            $('.statusselect').on('change', function() {
                var selectedStatus = $(this).val();
                var userid = $(this).data('id');
                Swal.fire({
                    title: "Updating Order Status !",
                    icon: "question",
                    input: "text",
                    inputAttributes: {
                        name: "statusreason",
                        required: "required"
                    },
                    inputPlaceholder: "Enter Reason for Updating Status",
                    showCancelButton: true,
                    confirmButtonColor: "#22005a",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, update it!",
                    cancelButtonText: "Cancel",
                    preConfirm: (
                        inputValue
                    ) => { //The function preConfirm code will return the value of input to the AJAX
                        if (!inputValue) {
                            Swal.showValidationMessage('Reason is required');
                        }
                        return inputValue;
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        const reason = result.value;
                        $.ajax({
                            url: '/admin/updateorderstatus',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                status: selectedStatus,
                                record_id: userid,
                                reason: reason,
                            },
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        title: "Success!",
                                        text: "Status Updated..!",
                                        icon: "success",
                                        confirmButtonText: "OK"
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire("Error", "Failed to update Order status.",
                                        "error");
                                }
                            },
                        });
                    }
                });
            });
        }
    </script>

    <!-- <script>
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
    </script> -->

    <!--यदि शांति या युद्ध में समान वृद्धि हो तो राजा को शांति का सहारा लेना चाहिए।-->
    <!--Getting Orders by Status-->
    <script>
        $(document).ready(function() {
            UpdateOrderStatus();
            $('.masterselect').on('change', function() {
                var selectedStatus = $(this).val();
                console.log(selectedStatus);
                $('#table-body').html('');

                // AJAX request
                $.ajax({
                    url: '/admin/getordersbystatus/' + selectedStatus,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);

                        // Check if the response contains data
                        if (response && response.length > 0) {
                            response.forEach(function(row) {
                                var dateObj = new Date(row.created_at);
                                var formattedDate = dateObj.toLocaleDateString('en-GB', {
                                    day: 'numeric',
                                    month: 'short',
                                    year: 'numeric'
                                });

                                var formattedTime = dateObj.toLocaleTimeString('en-US', {
                                    hour: 'numeric',
                                    minute: '2-digit',
                                    hour12: true // Ensures 12-hour format with AM/PM
                                });
                                var companydetails = JSON.parse(row.company_details);
                                var html = `
                                    <tr>
                                        <td>
                                            <div>
                                                <div>#Order${row.id}</div>
                                                <div>${formattedDate} | ${formattedTime}</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>${row.customername}</div>
                                                <div>${row.email}</div>
                                                <div>+91-${row.mobilebumber}</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>${companydetails.companyname}</div>
                                                <div>${companydetails.email}</div>
                                                <div>${companydetails.officeaddress}</div>
                                            </div>
                                        </td>
                                        <td>
                                            ${
                                                row.status === 'processing'
                                                    ? '<span class="badge badge-label bg-info fs-6"><i class="mdi mdi-circle-medium"></i>Processing</span>'
                                                    : row.status === 'delivered'
                                                    ? '<span class="badge badge-label bg-success fs-6"><i class="mdi mdi-circle-medium"></i>Delivered</span>'
                                                    : row.status === 'postponed'
                                                    ? '<span class="badge badge-label bg-secondary fs-6"><i class="mdi mdi-circle-medium"></i>Postponed</span>'
                                                    : '<span class="badge badge-label bg-danger fs-6"><i class="mdi mdi-circle-medium"></i>Cancelled</span>'
                                            }
                                        </td>
                                        <td>
                                            <select name="status" data-id="${row.id}" class="form-select statusselect" required>
                                                <option value="processing" ${row.status === 'processing' ? 'selected' : ''}>Processing</option>
                                                <option value="delivered" ${row.status === 'delivered' ? 'selected' : ''}>Delivered</option>
                                                <option value="postponed" ${row.status === 'postponed' ? 'selected' : ''}>Postponed</option>
                                                <option value="cancel" ${row.status === 'cancel' ? 'selected' : ''}>Cancel</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="hstack gap-3 flex-wrap">
                                                <a href="/admin/vieworderinvoice/${row.id}/${row.userid}">
                                                    <button class="btn btn-soft-dark btn-border">View Invoice</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                `;
                                $('#table-body').append(html);
                                UpdateOrderStatus();

                            });
                        } else {
                            $('#table-body').html('<tr><td colspan="6">No orders found for this status.</td></tr>');
                        }
                    }
                });
            });
        });
    </script>

    <!-- Date Filter Code -----------------------DEKHA Bhul gaya naa tu aagaya naa main kaam -- -->
    <script>
    $(document).ready(function () {

        var dataTableCustomer = $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
                }
            });

        $('.datebtn').on('click', function () {
            var datefrom = $('#datefrom').val();
            var dateto = $('#dateto').val();

            console.log("Date From:", datefrom);
            console.log("Date To:", dateto);

            $.ajax({
                url: '/admin/filterordersbydates',
                method: 'POST',
                data: {
                    datefrom: datefrom,
                    dateto: dateto,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log("Filtered data:", response); // Ensure response is logged
                    if (Array.isArray(response) && response.length > 0) {
                        // Properly destroy the existing DataTable instance
                        dataTableCustomer.clear().destroy();
                        $('#table-body').empty(); // Clear the table body

                        // Loop through the response and append rows
                        response.forEach(function (row) {
                            var dateObj = new Date(row.created_at);
                                var formattedDate = dateObj.toLocaleDateString('en-GB', {
                                    day: 'numeric',
                                    month: 'short',
                                    year: 'numeric'
                                });

                                var formattedTime = dateObj.toLocaleTimeString('en-US', {
                                    hour: 'numeric',
                                    minute: '2-digit',
                                    hour12: true 
                                });
                            try {
                                var companydetails = row.company_details
                                    ? JSON.parse(row.company_details)
                                    : { companyname: "", email: "", officeaddress: "" };
                                var html = `
                                    <tr>
                                        <td>
                                            <div>
                                                <div>#Order${row.id}</div>
                                               <div>${formattedDate} | ${formattedTime}</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>${row.customername}</div>
                                                <div>${row.email}</div>
                                                <div>+91-${row.mobilebumber}</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <div>${companydetails.companyname}</div>
                                                <div>${companydetails.email}</div>
                                                <div>${companydetails.officeaddress}</div>
                                            </div>
                                        </td>
                                        <td>
                                            ${
                                                row.status === 'processing'
                                                    ? '<span class="badge badge-label bg-info fs-6"><i class="mdi mdi-circle-medium"></i>Processing</span>'
                                                    : row.status === 'delivered'
                                                    ? '<span class="badge badge-label bg-success fs-6"><i class="mdi mdi-circle-medium"></i>Delivered</span>'
                                                    : row.status === 'postponed'
                                                    ? '<span class="badge badge-label bg-secondary fs-6"><i class="mdi mdi-circle-medium"></i>Postponed</span>'
                                                    : '<span class="badge badge-label bg-danger fs-6"><i class="mdi mdi-circle-medium"></i>Cancelled</span>'
                                            }
                                        </td>
                                        <td>
                                            <select name="status" data-id="${row.id}" class="form-select statusselect" required>
                                                <option value="processing" ${row.status === 'processing' ? 'selected' : ''}>Processing</option>
                                                <option value="delivered" ${row.status === 'delivered' ? 'selected' : ''}>Delivered</option>
                                                <option value="postponed" ${row.status === 'postponed' ? 'selected' : ''}>Postponed</option>
                                                <option value="cancel" ${row.status === 'cancel' ? 'selected' : ''}>Cancel</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="hstack gap-3 flex-wrap">
                                                <a href="/admin/vieworderinvoice/${row.id}/${row.userid}">
                                                    <button class="btn btn-soft-dark btn-border">View Invoice</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                `;
                                $('#table-body').append(html);
                            } catch (e) {
                                console.error("Error parsing data for row:", row, e);
                            }
                        });

                        // Reinitialize DataTable
                        dataTableCustomer = $('#example').DataTable({
                            dom: 'Bfrtip',
                            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        });
                    } else {
                        $('#table-body').html('<tr><td colspan="6">No orders found for the selected date range.</td></tr>');
                    }
                },
                error: function (error) {
                    console.error("Error fetching filtered data:", error);
                }
            });
        });
    });
</script>

</x-app-layout>