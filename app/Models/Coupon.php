<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'coupon_type',
        'coupon_value',
        'start_date',
        'end_date',
        'active',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
