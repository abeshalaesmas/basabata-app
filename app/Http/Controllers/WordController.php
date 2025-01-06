<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends Controller
{
    public function generateRandomWord()
    {
        // Fetch a random word from the database
        $randomWord = Word::inRandomOrder()->first();

        return view('random-word', compact('randomWord'));
    }
}
