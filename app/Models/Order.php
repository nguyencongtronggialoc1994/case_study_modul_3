<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'orderDate',
        'requiredDate',
        'shippedDate',
        'status',
        'totalPrice',
        'customer_id',
    ];
//    public $timestamps=false;
}
