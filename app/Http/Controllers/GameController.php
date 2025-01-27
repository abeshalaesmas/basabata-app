<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function showGames(){
        return view('games.select-games');
    }

    //QUIZ
    public function showQuiz(){
        return view('quiz_sample.select-quiz');
    }

    public function quizOne() {
        return view('quiz_sample.quiz-one');
    }
    //SHUFFLE SEN

}
