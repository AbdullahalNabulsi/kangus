<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'category_id',
        'image',
        'arabic_note',
        'english_note',
        'description',
        'active',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
