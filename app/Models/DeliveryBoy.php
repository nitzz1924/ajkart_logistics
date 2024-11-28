<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class DeliveryBoy extends Authenticatable
{
    use Notifiable;
    protected $table = 'delivery_boys';
    protected $fillable = [
        'fullname',
        'email',
        'mobilenumber',
        'city',
        'state',
        'zipcode',
        'address',
        'otp',
        'status',
    ];
}
