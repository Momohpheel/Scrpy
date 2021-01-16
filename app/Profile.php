<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'firstname', 'lastname','user_id', 'gender','state', 'city', 'country','phone', 'address'
    ];
}
