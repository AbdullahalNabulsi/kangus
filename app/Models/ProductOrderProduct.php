<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrderProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_order_id',
        'quantity',
        'price',
        'total',
        'total_discount',
        'net_total',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
