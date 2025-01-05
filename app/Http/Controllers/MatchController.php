<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Match;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    public function match()
    {
         $user= User::all(); // Fetch all matches
             return view('matches.match' , compact('user')); // Pass matches to the view
    }
}