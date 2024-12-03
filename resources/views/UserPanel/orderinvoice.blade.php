{{-- ---------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏--------------------------- --}}
@extends('layouts.UserPanelLayouts.usermain')
@section('title', 'Invoice | ' . config('app.name'))
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">@yield('title')</h4>
                <div class="page-title-right">
                    <a href="{{ url()->previous() }}">
                        <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i
                                class="ri-arrow-go-back-fill align-middle me-2"></i>Go Back</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-outline-dark waves-effect waves-light" onclick="window.print()"><i
                                class="ri-printer-fill align-middle me-2"></i>Print Invoice</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
            <tr>
                <td height="20"></td>
            </tr>
            <tr>
                <td>
                    <table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                        bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                        <tr class="hiddenMobile">
                            <td height="40"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="30"></td>
                        </tr>

                        <tr>
                            <td>
                                <table width="800" border="0" cellpadding="0" cellspacing="0" align="center"
                                    class="fullPadding">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <table width="850" border="0" cellpadding="0" cellspacing="0"
                                                    align="left" class="col">
                                                    @php
                                                    $companydata = json_decode($allproductdata->company_details,true);
                                                    //dd($companydata);
                                                    @endphp
                                                    <tbody>
                                                        <tr>
                                                            <td align="left"><img
                                                                    src="{{asset('/assets/images/Services/'.$companydata['companylogo'])}}"
                                                                    width="150" alt="logo" border="0" /></td>
                                                        </tr>
                                                        <tr class="hiddenMobile">
                                                            <td height="40"></td>
                                                        </tr>
                                                        <tr class="visibleMobile">
                                                            <td height="20"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 16px; color: #5b5b5b;  line-height: 18px; vertical-align: top; text-align: left;">
                                                                Hello, {{$allproductdata->customername}}.
                                                                <br> Thank you for shopping from our store and for your
                                                                order.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table width="850" border="0" cellpadding="0" cellspacing="0"
                                                    align="right" class="col">
                                                    <tbody>
                                                        <tr class="visibleMobile">
                                                            <td height="20"></td>
                                                        </tr>
                                                        <tr>
                                                            <td height="5"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 21px; color: #ff0000; letter-spacing: -1px;  line-height: 1; vertical-align: top; text-align: right;">
                                                                Invoice
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <tr class="hiddenMobile">
                                                            <td height="50"></td>
                                                        </tr>
                                                        <tr class="visibleMobile">
                                                            <td height="20"></td>
                                                        </tr>
                                                        <tr>
                                                            <td
                                                                style="font-size: 16px; color: #5b5b5b;  line-height: 18px; vertical-align: top; text-align: right;">
                                                                <small>ORDER</small> #{{$allproductdata->id}}<br />
                                                                <small> {{ $allproductdata->created_at->format('d M Y |
                                                                    h:i A') }}</small>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
            <tbody>
                <tr>
                    <td>
                        <table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                            bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                <tr class="hiddenMobile">
                                    <td height="60"></td>
                                </tr>
                                <tr class="visibleMobile">
                                    <td height="40"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="800" border="0" cellpadding="0" cellspacing="0" align="center"
                                            class="fullPadding">

                                            <tbody>
                                                <tr>
                                                    <th style="font-size: 16px;  color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                                                        width="52%" align="left">
                                                        Item
                                                    </th>
                                                    <th style="font-size: 16px;  color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                        align="center">
                                                        Quantity
                                                    </th>
                                                    <th style="font-size: 16px;  color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                        align="right">
                                                        Subtotal
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td height="1" style="background: #bebebe;" colspan="4"></td>
                                                </tr>
                                                <tr>
                                                    <td height="10" colspan="4"></td>
                                                </tr>
                                                @php
                                                $mainproductdata = json_decode($allproductdata->product_data,true);
                                                //dd($mainproductdata);
                                                @endphp
                                                @foreach ($mainproductdata as $row)
                                                @php
                                                    $rowdata = json_decode($row['rowdata'], true); // Decode rowdata
                                                @endphp
                                                <tr>
                                                    <td style="font-size: 16px;  color: #ff0000;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                        class="article">
                                                        {{$rowdata['productname']}}
                                                    </td>
                                                    <td style="font-size: 16px;  color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                        align="center">{{$row['product_qty']}}</td>
                                                    <td style="font-size: 16px;  color: #1e2b33;  line-height: 18px;  vertical-align: top; padding:10px 0;"
                                                        align="right"> ₹ {{$allproductdata->subtotal}}/-</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
            <tbody>
                <tr>
                    <td>
                        <table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                            bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                    <td>

                                        <!-- Table Total -->
                                        <table width="800" border="0" cellpadding="0" cellspacing="0" align="center"
                                            class="fullPadding">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="font-size: 16px;  color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                        Subtotal
                                                    </td>
                                                    <td style="font-size: 16px;  color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;"
                                                        width="80">
                                                        ₹ {{$allproductdata->subtotal}}/-
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 16px;  color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                       Discount Amount
                                                    </td>
                                                    <td
                                                        style="font-size: 16px;  color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; ">
                                                        ₹ {{$allproductdata->totaldiscount}}/-
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 16px;  color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                                        <strong>Grand Total</strong>
                                                    </td>
                                                    <td
                                                        style="font-size: 16px;  color: #000; line-height: 22px; vertical-align: top; text-align:right; ">
                                                        <strong> ₹ {{$allproductdata->grandtotal}}/-</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
            <tbody>
                <tr>
                    <td>
                        <table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                            bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                <tr class="hiddenMobile">
                                    <td height="60"></td>
                                </tr>
                                <tr class="visibleMobile">
                                    <td height="40"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="800" border="0" cellpadding="0" cellspacing="0" align="center"
                                            class="fullPadding">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                            align="left" class="col">

                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                        <strong>BILLING INFORMATION</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                        {{$allproductdata->billingaddress}}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                            align="right" class="col">
                                                            <tbody>
                                                                <tr class="visibleMobile">
                                                                    <td height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                        <strong>PAYMENT METHOD</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                        Cash on Delivery
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="800" border="0" cellpadding="0" cellspacing="0" align="center"
                                            class="fullPadding">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                            align="left" class="col">
                                                            <tbody>
                                                                <tr class="hiddenMobile">
                                                                    <td height="35"></td>
                                                                </tr>
                                                                <tr class="visibleMobile">
                                                                    <td height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                        <strong>SHIPPING INFORMATION</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                        {{$allproductdata->shippingaddress}}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

                                                        <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                            align="right" class="col">
                                                            <tbody>
                                                                <tr class="hiddenMobile">
                                                                    <td height="35"></td>
                                                                </tr>
                                                                <tr class="visibleMobile">
                                                                    <td height="20"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                        <strong>SHIPPING METHOD</strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="100%" height="10"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        style="font-size: 16px;  color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                       AJ-KART LOGISTICS
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="hiddenMobile">
                                    <td height="60"></td>
                                </tr>
                                <tr class="visibleMobile">
                                    <td height="30"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">

            <tr>
                <td>
                    <table width="900" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                        bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
                        <tr>
                            <td>
                                <table width="800" border="0" cellpadding="0" cellspacing="0" align="center"
                                    class="fullPadding">
                                    <tbody>
                                        <tr>
                                            <td
                                                style="font-size: 16px; color: #5b5b5b;  line-height: 18px; vertical-align: top; text-align: left;">
                                                Have a nice day.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="spacer">
                            <td height="50"></td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td height="20"></td>
            </tr>
        </table>
    </div>
</div>
@endsection
