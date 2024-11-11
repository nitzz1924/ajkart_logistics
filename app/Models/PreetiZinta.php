<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreetiZinta extends Model
{
    protected $fillable = [
        'category',
        'subcategory',
        'price',
        'productname',
        'saleprice',
        'coverimage',
    ];
}
