<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'keyword',
        'summery',
        'discription',
        'offer_type',
        'meal_type',
        'image',
        'status',
        'resort_id',
        'updateddatetime',
        'tbl_user_idtbl_user',
    ];
}
