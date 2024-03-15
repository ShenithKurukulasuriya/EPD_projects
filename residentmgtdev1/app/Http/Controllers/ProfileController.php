<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
   
    
    public function show()
    {
        $user = Auth::user();
    
        if (!$user) {
            // Handle the case where the user is not authenticated
            return redirect()->route('login');
        }
    
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'old_password' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        // Validate old password
        if (!Hash::check($request->input('old_password'), $user->password)) {
            return redirect()->back()->withErrors(['old_password' => 'The old password is incorrect.']);
        }
    
        // Update user information
        $user->update([
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
        ]);
    
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}