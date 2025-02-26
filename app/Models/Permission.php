<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
        'guard_name',
        'pivot',
        'module_id',
        'active',
    ];
}
