<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function incrementScore(Request $request) {
        $request->validate([
            'score' => 'required|integer'
        ]);

        $userId = Auth::id();
        $userScore = Profile::find($userId);
        if($userScore){
            $userScore->increment('score', $request->score);
        }

        return response()->json([
            'message' => 'Score incremented successfully',
            'new_score' => $userScore->score ?? 0
        ]);
    }
}
