<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
    public function create()
    {
        $units = Unit::pluck('name', 'id');
        return view('users.profile')->with('units',$units);;
    }
    public function show()
{
    $user = Auth::user(); // Get the currently authenticated user
    return view('users.profile', ['user' => $user]);
}


public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'nullable|min:6|confirmed',
        'profile_image' => 'nullable|image|max:1024',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Update the user's profile data
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    
    if ($request->has('password')) {
        $user->password = bcrypt($validatedData['password']);
    }

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/profiles/' . $filename);
        // Image::make($image->getRealPath())->resize(200, 200)->save($path);
        $user->profile_image = $filename;
    }

    // $user->save();

    // Redirect back to the profile page
    return redirect()->route('/users/profile')->with('success', 'Profile updated successfully!');
}

}
