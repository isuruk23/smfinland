<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'type',
        'resort',
        'category',
        'offer',
        'offertype',
        'resorttype',
        'rates',
        'price',
        'keyword',
        'resort_alias',
        'summery',
        'discription',
        'offer_discription',
        'villa_discription',
        'restaurants_discription',
        'experiences_discription',
        'imap',
        'address',
        'country',
        'image',
        'bannerimage',
        'status',
        'updateddatetime',
        'tbl_user_idtbl_user',
    ];
}
