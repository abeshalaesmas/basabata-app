<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ScoreController extends Controller
{
    public function incrementScore(Request $request) {
        $request->validate([
            'user_id' => 'required|integer|exists:profiles,id'
        ]);

        $userScore = Profile::find($request->user_id);
        $userScore->increment('score', 10);

        return redirect()->back()->with([
            'message' => 'Score incremented successfully',
            'new_score' => $userScore->score
        ]);
    }
}
