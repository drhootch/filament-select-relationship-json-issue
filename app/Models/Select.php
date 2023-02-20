<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Select extends Model
{
    protected $fillable = [
        'data',
    ];

    protected $casts = [
        'data' => 'json',
    ];
}
