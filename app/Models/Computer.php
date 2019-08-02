<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'owner', 'type', 'hard', 'ram', 'size'
    ];
}
