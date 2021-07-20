<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PotUser extends Model
{
    protected $fillable = [
        'Potname', 'Mac','User','status','avata','Email'
    ];
}
