<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'intro_video',
        'uuid',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
