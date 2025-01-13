<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FacilitiesActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'facilities_activities',
        'description',
        'type',
        'image',
        'resort_id',
        'status',
        'updateddatetime',
        'user_userid',
    ];
}
