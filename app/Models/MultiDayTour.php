<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiDayTour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'discount',
        'slogan',
        'slug',
        'summary',
        'description',
        'days',
        'nights',
        'price',
        'start_date',
        'end_date',
        'itinerary',
        'includes',
        'excludes',
        'conditions',
        'important',
        'tips',
        'image',
        'banner_image',
        'is_active',
    ];
}
