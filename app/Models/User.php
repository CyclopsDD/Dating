<?php

namespace App\Models;
use Carbon\Carbon;

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
    protected $dates = [
        'date_of_birth',
        // ...existing code...
    ];

    public function age()
    {
        return $this->date_of_birth ? Carbon::parse($this->date_of_birth)->age : null;
    }  
}
