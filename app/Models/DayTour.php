<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class DayTour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'discount',
        'slogan',
        'slug',
        'summary',
        'description',
        'price',
        'start_date',
        'end_date',
        'image',
        'banner_image',
        'is_active',
    ];
}
