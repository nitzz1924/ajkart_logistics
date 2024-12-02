<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookDelivery extends Model
{
    protected $fillable = [
        'userid',
        'customername',
        'mobilebumber',
        'email',
        'pincode',
        'city',
        'state',
        'country',
        'product_data',
        'company_details',
        'billingaddress',
        'shippingaddress',
        'subtotal',
        'totaldiscount',
        'grandtotal',
        'status',
    ];
}
