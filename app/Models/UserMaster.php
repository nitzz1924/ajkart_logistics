<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMaster extends Model
{
    protected $fillable = [
        'type',
        'label',
        'userid',
    ];
}
