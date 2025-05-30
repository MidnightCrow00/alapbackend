<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    protected $fillable=[
        'angol',
        'magyar',
        'temaId',
    ];
}
