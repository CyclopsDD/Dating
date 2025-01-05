<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function match()
    {
        // Fetch all users
        $matches = User::all();

        return view('matches.match', compact('matches'));
    }

    public function show($id)
    {
        // Fetch a specific user by ID
        $match = User::findOrFail($id);

        return view('matches.show', compact('match'));
    }
}