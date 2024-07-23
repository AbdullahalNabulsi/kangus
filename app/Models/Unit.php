<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'symbol',
        'active',
        'is_minimum',
        'uuid',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
