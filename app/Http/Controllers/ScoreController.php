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
        if($request->score > $userScore->score){
            $userScore->score = $request->score;
            $userScore->save();
        }

        return response()->json([
            'message' => 'Score incremented successfully',
            'new_score' => $userScore->score ?? 0
        ]);
    }

    public function resetScore() { //this is for debugging purposes only
        $userId = Auth::id();
        $userScore = Profile::find($userId);
        if($userScore){
            $userScore->score = 0;
            $userScore->save();
        }
        return redirect()->back()->with('message', 'Score reset successfully');
    }
}
