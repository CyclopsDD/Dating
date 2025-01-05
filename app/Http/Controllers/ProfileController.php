<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', ['user' => auth()->user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'location' => 'required|string|max:255',
            'seeking_gender' => 'required|in:male,female,both',
            'profile_photo' => 'nullable|image|max:2048'
        ]);

        $user = auth()->user();
        
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo = $path;
        }

        $user->fill($request->except('profile_photo'))->save();
        
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}