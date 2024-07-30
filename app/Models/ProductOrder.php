<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'total',
        'total_discount',
        'net_total',
        'discount_type',
        'coupon_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
