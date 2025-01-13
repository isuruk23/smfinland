<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'idtbl_doc',
        'documents',
        'file_path',
        'g_drive_path',
        'hotel_id',
        'document_type',
        'status',
        'updatedatetime',
        'tbl_user_idtbl_user',
    ];
}
