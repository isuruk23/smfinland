<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResortCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'type',
        'updatedatetime',
        'status',
        'tbl_user_idtbl_user',
    ];
}
