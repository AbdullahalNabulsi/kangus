<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'category_id',
        'unit_id',
        'product_type_id',
        'price',
        'serial_number',
        'lot_number',
        'product_number',
        'arabic_note',
        'english_note',
        'active',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
