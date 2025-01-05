<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'seeking_gender',
        'birth_date',
        'bio',
        'location',
        'profile_photo'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
