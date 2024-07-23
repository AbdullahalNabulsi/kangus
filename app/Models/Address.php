<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'postal_code',
        'extra_number',
        'unit_number',
        'street',
        'city_id',
        'country_id',
        'building_number',
        'plot_identification',
        'city_subdivision_name',
        'country_subentity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
