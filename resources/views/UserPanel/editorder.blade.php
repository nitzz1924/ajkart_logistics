{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('title', 'Edit Order | ' . config('app.name'))
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">@yield('title')</h4>
                <div class="page-title-right">
                    <a href="{{ route('vieworderinvoice', ['orderid' => $data->id]) }}">
                        <button type="button" class="btn btn-outline-secondary waves-effect waves-light"><i
                                class="ri-bill-fill align-middle me-2"></i>Make Invoice</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('updateorderdetails') }}" method="POST" enctype="multipart/form-data" id="mainform">
        @csrf
        @php
        $productdata = json_decode($data->product_data, true);
        // foreach ($productdata as $value) {
        // dd($value);
        // }
        @endphp
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Edit Customer Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Customer Name</label>
                                <input class="form-control" placeholder="Enter Customer Name" name="customername"
                                    type="text" value="{{ $data->customername }}" id="example-email-input">
                                <input type="hidden" name="product_data" id="product_data">
                                <input type="hidden" name="orderid" id="orderid" value="{{ $data->id }}">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Mobile Number</label>
                                <input class="form-control" placeholder="Enter Mobile Number" name="mobilebumber"
                                    type="text" value="{{ $data->mobilebumber }}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Email</label>
                                <input class="form-control" placeholder="Enter Email" name="email" type="email"
                                    value="{{ $data->email }}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Pincode</label>
                                <input class="form-control" placeholder="Enter Pincode" name="pincode" type="text"
                                    value="{{ $data->pincode }}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">City</label>
                                <input class="form-control" placeholder="Enter City" name="city" type="text"
                                    value="{{ $data->city }}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">State</label>
                                <input class="form-control" placeholder="Enter State" name="state" type="text"
                                    value="{{ $data->state }}" id="example-email-input">
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label for="example-email-input" class="form-label">Country</label>
                                <input class="form-control" placeholder="Enter Country" name="country" type="text"
                                    value="{{ $data->country }}" id="example-email-input">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <label for="example-email-input" class="form-label">Billing Address</label>
                                <textarea rows="4" name="billingaddress" class="form-control resize-none"
                                    placeholder="Billing Address...">{{ $data->billingaddress }}</textarea>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <label for="example-email-input" class="form-label">Shipping Address</label>
                                <textarea rows="4" name="shippingaddress" class="form-control resize-none"
                                    placeholder="Shipping Address...">{{ $data->shippingaddress }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Edit Order Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="col-lg-8">
                                <select id="SelExample" class="form-select">
                                    <option value="" selected>--select product</option>
                                    @foreach ($allproducts as $row)
                                    <option value="{{ $row->id }}">
                                        {{ $row->productname }}-{{ $row->id }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <a href="#" onclick="getProduct()" style="background-color: #22005a"
                                    class="btn text-white border-0">Add</a>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <!-- Bordered Tables -->
                            <table class="table table-bordered table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Sale Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">

                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <td colspan="7" class="text-muted fs-6">Sub-Total</td>
                                        <td class="fs-6"> <input class="form-control"
                                                style="border: 0px;background-color: #f3f6f9;" type="text" id="subtotal"
                                                value="" name="subtotal"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="text-muted fs-6">Discount Amount</td>
                                        <td class="fs-6"><input class="form-control"
                                                style="border: 0px;background-color: #f3f6f9;" type="text"
                                                id="totaldiscount" value="" name="totaldiscount"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="text-muted fs-6">Total</td>
                                        <td class="fs-6"><input class="form-control"
                                                style="border: 0px;background-color: #f3f6f9;" type="text"
                                                id="grandtotal" value="" name="grandtotal"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" style="background-color: #22005a"
                                class="btn text-white border-0">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    {{-- This is onload function --}}
    <script>
        $(document).ready(function() {
                var data = @json($productdata);
                console.log(data);
                // Loop through the products and append each row
                data.forEach(element => {
                    var rowdata = JSON.parse(element.rowdata);
                    const imageSrc = rowdata.coverimage ? '/assets/images/Services/' + rowdata.coverimage : '';
                    console.log(element.product_id);
                    var tr = `
                            <tr id="product-row-${element.product_id}">
                                <td>${element.product_id}</td>
                                <td>
                                    <img src="${imageSrc}" alt="Icon Image" width="60">
                                </td>
                                <td>${rowdata.productname.substr(0, 10)}...</td>
                                <td id="product-price${element.product_id}" class="product-price" data-price="${rowdata.saleprice}"><s class="text-muted fs-6">₹${rowdata.price}/-</s><br>₹${rowdata.saleprice}/-</td>
                                <td>
                                    <div class="input-step">
                                        <button type="button" class="minus" data-id="${element.product_id}">–</button>
                                        <input type="number" id="product-quantity-${element.product_id}" class="product-quantity" value="${element.product_qty}" min="1" max="100">
                                        <button type="button" class="plus" data-id="${element.product_id}">+</button>
                                    </div>
                                </td>
                                <td>
                                    <input type="hidden" id="rowdata-${element.product_id}" class="rowdataclasss" name="rowdata" value='${JSON.stringify(rowdata)}'>
                                    <input id="discount-${element.product_id}" class="form-control discount-input" value="${element.product_disc}" placeholder="Discount" type="text">
                                </td>
                                <td>
                                    <input id="total-amount-${element.product_id}" class="form-control total-amount" value="${element.product_amt}" placeholder="Amount" type="text" readonly>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger deleteRow fs-6">
                                        <i class="ri-delete-bin-5-fill"></i>
                                    </button>
                                </td>
                            </tr>
                        `;
                    $("#tablebody").append(tr);

                    // Initialize calculation for the current product
                    ProductCalc(element.product_id);

                    // Attach event listeners for quantity and discount changes
                    $(`#product-quantity-${element.product_id}, #discount-${element.product_id}`).off('input')
                        .on(
                            'input',
                            function() {
                                ProductCalc(element.product_id);
                            });

                    // Plus button event
                    $(`.plus[data-id="${element.product_id}"]`).off('click').on('click', function() {
                        const input = $(`#product-quantity-${element.product_id}`);
                        const currentQty = parseInt(input.val()) || 1;
                        input.val(currentQty + 1);
                        ProductCalc(element.product_id);
                    });

                    // Minus button event
                    $(`.minus[data-id="${element.product_id}"]`).off('click').on('click', function() {
                        const input = $(`#product-quantity-${element.product_id}`);
                        const currentQty = parseInt(input.val()) || 1;
                        if (currentQty > 1) input.val(currentQty - 1);
                        ProductCalc(element.product_id);
                    });

                    // Discount input event
                    $(`#discount-${element.product_id}`).off('input').on('input', function() {
                        ProductCalc(element.product_id);
                    });
                });

                // Function to calculate the total for a product
                function ProductCalc(id) {
                    var price = parseFloat($(`#product-price${id}`).data("price")) || 0;
                    var qty = parseInt($(`#product-quantity-${id}`).val()) || 1;
                    var discount = parseFloat($(`#discount-${id}`).val()) || 0;

                    var total = (price * qty) - discount;
                    total = total < 0 ? 0 : total; // Ensure the total is not negative

                    // Update the total amount for this product
                    $(`#total-amount-${id}`).val(total);

                    // Update the subtotal and discount totals
                    updateFooterTotals();
                }

                // Function to update the subtotal, total discount, and grand total
                function updateFooterTotals() {
                    var subtotal = 0;
                    var totalDiscount = 0;

                    // Loop through each row to sum up the values
                    $('tr[id^="product-row-"]').each(function() {
                        var totalAmount = parseFloat($(this).find('.total-amount').val()) || 0;
                        var discount = parseFloat($(this).find('.discount-input').val()) || 0;
                        subtotal += totalAmount;
                        totalDiscount += discount;
                    });

                    // Calculate grand total (subtotal - totalDiscount)
                    var grandTotal = subtotal - totalDiscount;

                    // Update the footer values
                    $('#subtotal').val(subtotal);
                    $('#totaldiscount').val(totalDiscount);
                    $('#grandtotal').val(grandTotal);
                }

                // Function to generate the JSON for the products
                function generateProductJSON() {
                    var products = [];

                    $('tr[id^="product-row-"]').each(function() {
                        var productId = $(this).find('td').eq(0).text().trim();
                        var quantity = $(this).find('.product-quantity').val();
                        var discount = $(this).find('.discount-input').val();
                        var amount = $(this).find('.total-amount').val();
                        var rowdata = $(this).find('.rowdataclasss').val();

                        var productData = {
                            product_id: productId,
                            product_qty: quantity,
                            product_disc: discount,
                            product_amt: amount,
                            rowdata: rowdata,
                        };

                        products.push(productData);
                    });

                    return products;
                }
                // Attach the generateProductJSON function to the form submit
                $("#mainform").on("submit", function(event) {
                    var productsJson = generateProductJSON();
                    $('#product_data').val(JSON.stringify(productsJson));
                    this.submit();
                });

                // Delete Row function
                $(document).on('click', '.deleteRow', function() {
                    $(this).closest('tr').remove();
                    updateFooterTotals(); // Recalculate totals after a row is deleted
                });
            });
    </script>


    {{-- This is Append function --}}
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

                        // Initialize totals
                        var subtotal = 0;
                        var totalDiscount = 0;

                        // Loop through the products and append each row
                        data.forEach(element => {
                            const imageSrc = element?.coverimage ? '/assets/images/Services/' + element.coverimage : '';
                            var tr = `
                                <tr id="product-row-${element.id}">
                                    <td>${element.id}</td>
                                    <td>
                                        <img src="${imageSrc}" alt="Icon Image" width="60">
                                    </td>
                                    <td>${element.productname.substr(0, 10)}...</td>
                                    <td id="product-price${element.id}" class="product-price" data-price="${element.saleprice}">
                                        <s class="text-muted fs-6">₹${element.price}/-</s><br>₹${element.saleprice}/-
                                    </td>
                                    <td>
                                        <div class="input-step">
                                            <button type="button" class="minus" data-id="${element.id}">–</button>
                                            <input type="number" id="product-quantity-${element.id}" class="product-quantity" value="1" min="1" max="100">
                                            <button type="button" class="plus" data-id="${element.id}">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="hidden" id="rowdata-${element.id}" class="rowdataclasss" name="rowdata" value='${JSON.stringify(element)}'>
                                        <input id="discount-${element.id}" class="form-control discount-input" placeholder="Discount" type="text">
                                    </td>
                                    <td>
                                        <input id="total-amount-${element.id}" class="form-control total-amount" placeholder="Amount" type="text" readonly>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger deleteRow fs-6">
                                            <i class="ri-delete-bin-5-fill"></i>
                                        </button>
                                    </td>
                                </tr>
                            `;
                            $("#tablebody").append(tr);

                            // Initialize calculation for the current product
                            ProductCalc(element.id);

                            // Attach event listeners for quantity and discount changes
                            $(`#product-quantity-${element.id}, #discount-${element.id}`).off('input').on('input', function() {
                                ProductCalc(element.id);
                            });

                            // Plus button event
                            $(`.plus[data-id="${element.id}"]`).off('click').on('click', function() {
                                const input = $(`#product-quantity-${element.id}`);
                                const currentQty = parseInt(input.val()) || 1;
                                input.val(currentQty + 1);
                                ProductCalc(element.id);
                            });

                            // Minus button event
                            $(`.minus[data-id="${element.id}"]`).off('click').on('click', function() {
                                const input = $(`#product-quantity-${element.id}`);
                                const currentQty = parseInt(input.val()) || 1;
                                if (currentQty > 1) input.val(currentQty - 1);
                                ProductCalc(element.id);
                            });

                            // Discount input event
                            $(`#discount-${element.id}`).off('input').on('input', function() {
                                ProductCalc(element.id);
                            });
                        });

                        // Function to calculate the total for a product
                        function ProductCalc(id) {
                            var price = parseFloat($(`#product-price${id}`).data("price")) || 0;
                            var qty = parseInt($(`#product-quantity-${id}`).val()) || 1;
                            var discount = parseFloat($(`#discount-${id}`).val()) || 0;

                            var total = (price * qty) - discount;
                            total = total < 0 ? 0 : total; // Ensure the total is not negative

                            // Update the total amount for this product
                            $(`#total-amount-${id}`).val(total);

                            // Update the subtotal and discount totals
                            updateFooterTotals();
                        }

                        // Function to update the subtotal, total discount, and grand total
                        function updateFooterTotals() {
                            var subtotal = 0;
                            var totalDiscount = 0;

                            // Loop through each row to sum up the values
                            $('tr[id^="product-row-"]').each(function() {
                                var totalAmount = parseFloat($(this).find('.total-amount').val()) || 0;
                                var discount = parseFloat($(this).find('.discount-input').val()) || 0;
                                subtotal += totalAmount;
                                totalDiscount += discount;
                            });

                            // Calculate grand total (subtotal - totalDiscount)
                            var grandTotal = subtotal - totalDiscount;

                            // Update the footer values
                            $('#subtotal').val(subtotal);
                            $('#totaldiscount').val(totalDiscount);
                            $('#grandtotal').val(grandTotal);
                        }

                        // Function to generate the JSON for the products
                        function generateProductJSON() {
                            var products = [];

                            $('tr[id^="product-row-"]').each(function() {
                                var productId = $(this).find('td').eq(0).text().trim();
                                var quantity = $(this).find('.product-quantity').val();
                                var discount = $(this).find('.discount-input').val();
                                var amount = $(this).find('.total-amount').val();
                                var rowdata = $(this).find('.rowdataclasss').val();

                                var productData = {
                                    product_id: productId,
                                    product_qty: quantity,
                                    product_disc: discount,
                                    product_amt: amount,
                                    rowdata: rowdata,
                                };

                                products.push(productData);
                            });

                            return products;
                        }

                        // Attach the generateProductJSON function to the form submit
                        $("#mainform").on("submit", function(event) {
                            var productsJson = generateProductJSON();
                            $('#product_data').val(JSON.stringify(productsJson));
                            this.submit();
                        });

                        // Delete Row function
                        $(document).on('click', '.deleteRow', function() {
                            $(this).closest('tr').remove();
                            updateFooterTotals(); // Recalculate totals after a row is deleted
                        });
                    }
                });
            }
    </script>
    @endsection
