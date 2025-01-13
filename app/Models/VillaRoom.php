<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VillaRoom extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'type',
        'name',
        'description',
        'roomsize',
        'bed',
        'view',
        'wifi',
        'ac',
        'barthroom',
        'image',
        'resort_id',
        'status',
        'updateddatetime',
        'user_userid',
    ];
}
