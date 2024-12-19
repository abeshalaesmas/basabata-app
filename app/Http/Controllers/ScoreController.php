<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ScoreController extends Controller
{
    public function incrementScore(Request $request) {
        $request->validate([
            'score' => 'required|integer|min:0'
        ]);

        $userScore = Profile::find($request->user_id);
        $userScore->increment('score', 10);

        return response()->json([
            'message' => 'Score incremented by 1- successfully', 'new_score' => $userScore->score
        ], 200);        
    }
}
