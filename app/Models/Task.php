<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory,SoftDeletes;

    //to specify custom table name
   //protected $table = 'tasks';

    protected $fillable = [
        'title',
        'des',
        'status',
    ];

}
