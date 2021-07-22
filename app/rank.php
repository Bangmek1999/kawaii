<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rank extends Model
{
    protected $fillable = [
        'text', 'rank_point','potname','username','status'
    ];
}
