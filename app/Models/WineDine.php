<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WineDine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'description',
        'image',
        'resort_id',
        'status',
        'updatedatetime',
        'tbl_user_idtbl_user',
        'title',
    ];
}
