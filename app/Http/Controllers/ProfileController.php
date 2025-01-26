<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function create() {
        return view("profile-create");
    }

    public function store(Request $request) {
        $validated  = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'string|string|max:500',
            'score' => 'nullable|integer|min:0'
        ]);

        Profile::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'bio' => $validated['bio'],
            'score' => $validated['score'] ?? 0, // Default score to 0 if not provided
        ]);

        return redirect()->route('dashboard')->with('success', 'Profile created successfully!');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $profile = $user->profile;

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/profile_pictures', $filename);

            // Log the file path
            Log::info('Profile picture uploaded: ' . $path);

            // Delete old profile picture if exists
            if ($profile && $profile->profile_picture) {
                Storage::delete('public/profile_pictures/' . $profile->profile_picture);
            }

            // Save new profile picture
            if ($profile) {
                $profile->profile_picture = $filename;
                $profile->save();
            } else {
                Profile::create([
                    'user_id' => $user->id,
                    'profile_picture' => $filename,
                ]);
            }
        }

        return redirect()->route('profile')->with('success', 'Profile picture updated successfully.');
    }

    public function profile() {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:500',
        ]);

        $profile = Auth::user()->profile;
        $profile->update([
            'name' => $validated['name'],
            'bio' => $validated['bio'],
        ]);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
