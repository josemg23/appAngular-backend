<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'codigo',
        'nombre',
        'user_id',
        'active',
    ];
}
