<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileManager extends Model
{
    use HasFactory;

    protected $table = "file_managers";

    protected $fillable = [
        'title',
        'link',
        'ext',
    ];
}
