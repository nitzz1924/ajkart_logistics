{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
<x-app-layout>
    @section('title', "My Products | " . config('app.name'))
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
        <!-- Table Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-bordered border-light hover dt-responsive nowrap"
                            style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Cover Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Price</th>
                                    <th>Sales Price</th>
                                    <th>SKUs</th>
                                    {{-- <th>Status</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($myproducts as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><img src="{{ asset('assets/images/Services/' . $row->coverimage) }}"
                                            alt="Icon Image" width="60"></td>
                                    <td>{{ substr($row->productname,0,15) }}.....</td>
                                    <td>{{ $row->category }}</td>
                                    <td>{{ $row->subcategory }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->saleprice }}</td>
                                    <td>{{ $row->skus }}</td>
                                    {{-- <td>
                                        @if ($row->status == 'inprocess')
                                        <span class="badge bg-warning fs-6">Inprocess</span>
                                        @elseif($row->status == 'activated')
                                        <span class="badge bg-success fs-6">Activated</span>
                                        @elseif($row->status == 'deactivated')
                                        <span class="badge bg-danger fs-6">Deactivated</span>
                                        @endif
                                    </td> --}}
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                    data-pricing="{{ json_encode($row) }}"
                                                    class="px-2 text-primary fs-5 editbtnmodal"><i
                                                        class="ri-edit-2-fill" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Edit"></i></a>
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
        <div id="myModal" class="modal flip" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content rounded-2">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel fs-5 fw-bold text-black">Edit Invetory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="{{ route('udpateinventory') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body" id="modalbodyedit">

                        </div>
                        {{-- <div class="">
                            <label for="labelid">Change Status</label>
                            <select name="status" class="form-select" id="servicetypeidnew">
                                <option value="inprocess" ${pricingdata.status=='inprocess' ? 'selected' : '' }>
                                    Inprocess</option>
                                <option value="activated" ${pricingdata.status=='activated' ? 'selected' : '' }>
                                    Activated</option>
                                <option value="deactivated" ${pricingdata.status=='deactivated' ? 'selected' : '' }>
                                    Deactivated</option>
                            </select>
                        </div> --}}
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
        //This function is for blade file
        $(document).on('change', '#servicetypeid', function() {
            var selectedtype = $(this).val();
            console.log(selectedtype);
            $.ajax({
                url: "/filtercategory/" + selectedtype,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    var dropdown1 = $('#servicemainid');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    data.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.label + '">' + item.label +
                            '</option>'));
                    });
                }
            });
        });

        //This function is for Modal
        $(document).on('change', '#servicetypeidnew', function() {
            var selectedtype = $(this).val();
            console.log(selectedtype);
            $.ajax({
                url: "/filtercategory/" + selectedtype,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    var dropdown1 = $('#servicemainidnew');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    data.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.label + '">' + item.label +
                            '</option>'));
                    });
                }
            });
        });


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
    <script>
        //Edit Functionality
        var data = @json($data);
        console.log(data);
        $('#table-body').on('click', '.editbtnmodal', function() {
            const pricingdata = $(this).data('pricing');
            console.log(pricingdata);
            const imageSrc = pricingdata.coverimage ? 'assets/images/Services/' + pricingdata.coverimage : '';
            console.log(imageSrc);
            $('#modalbodyedit').empty();

            // Create documents options with selected values
            const category = data.map(value => `
                <option value="${value.label}" ${value.label == pricingdata.category ? 'selected' : ''}>${value.label}</option>
            `).join('');


            const modalbody = `
                <div class="mb-3 row">
                <div class="col-lg-6">
                    <div class="">
                         <label for="labelid">Product Name</label>
                        <input class="form-control" placeholder="Enter Product Name" name="productname"
                            type="text" id="labelid" required value="${pricingdata.productname}">


                        <label for="labelid">Select Category</label>
                        <select name="category" class="form-select" id="servicetypeidnew">
                                <option value="">--select Category--</option>
                            ${category}
                        </select>
                            </div>
                        <div class="mt-3">
                             <label for="labelid">Select Sub Category</label>
                                <select name="subcategory" class="form-select" id="servicemainidnew">

                                </select>
                        </div>
                <div class="mt-2 mb-2">
                        <label for="labelid">Price</label>
                        <input class="form-control" value="${pricingdata.price}" placeholder="Enter Price" name="price" type="text" id="labelid">
                         <input type="hidden" name="pricingid" value="${pricingdata.id}" id="">
                </div>
                <div class="mt-2 mb-2">
                    <label for="disprice">Sales Price</label>
                    <input class="form-control" placeholder="Enter Sales Price" value="${pricingdata.saleprice}" name="saleprice" type="text" id="labelid">
                </div>
                 <div class="mt-2 mb-2">
                    <label for="skus">SKU</label>
                    <input class="form-control" placeholder="Enter SKU" value="${pricingdata.skus}" name="skus" type="text"
                        id="skus" required>
                </div>
                <div class="mt-2 mb-2">
                    <label for="iconimage">Upload Cover Image</label>
                    <input class="form-control" onchange="readURL(this);" placeholder="enter value" name="coverimage" type="file" value="">
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="img-pre">
                        <img id="imagemain" class="img-fluid"  src="${imageSrc}" alt="">
                    </div>
                </div>
        </div>
    `;
            $('#modalbodyedit').append(modalbody);
            setTimeout(function() {
                $('#documentselect').select2();
            }, 500);
        });
    </script>
</x-app-layout>
