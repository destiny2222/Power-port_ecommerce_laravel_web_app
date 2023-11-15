<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone_number',
        'address',
        'billing_address',
        'total',
        'reference',
        'note',
        'status',
        'city',
        'state',
        'country_code',
        'payment_date'
     ];

     public function items()
     {
         return $this->hasMany(Cart::class);
     }
     
}
