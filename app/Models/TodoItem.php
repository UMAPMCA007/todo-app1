<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'time',
        'start_time',
        'end_time'
    ];


}
