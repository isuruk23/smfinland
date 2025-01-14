<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'name',
        'arrival', 
        'departure', 
        'country', 
        'nationality', 
        'night', 
        'adult', 
        'child', 
        'infant', 
        'contactno', 
        'email',
        'tourid',
        'tourtype',
        'villaid',
        'resortid',
        'offerid',
    ];
}
