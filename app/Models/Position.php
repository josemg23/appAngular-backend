<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'user_id',
        'active',

    ];
}
