<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DayTourDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'highlight',
        'itinerary',
        'includes',
        'excludes',
        'conditions',
        'important',
        'tour_id',
        'is_active',
    ];
}
