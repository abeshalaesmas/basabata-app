<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create() {
        return view("profile-create");
    }

    public function store(Request $request) {
        $validated  = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:500',
            'score' => 'nullable|integer|min:0'
        ]);

        Profile::create([
            'user_id' => Auth::id(),
            'name' => $validated['name'],
            'bio' => $validated['bio'] ?? null,
            'score' => $validated['score'] ?? 0, // Default score to 0 if not provided
        ]);

        return redirect()->route('dashboard')->with('success', 'Profile created successfully!');
    }
}
