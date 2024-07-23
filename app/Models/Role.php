<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'module_id',
        'seeder_id',
        'guard_name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'guard_name',
        'pivot',
    ];
}
