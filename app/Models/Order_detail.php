<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'price',
        'quantity'
    ];
}
