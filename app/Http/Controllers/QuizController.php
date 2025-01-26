<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function showQuiz(){
        return view('quiz_sample.select-quiz');
    }

    public function quizOne() {
        return view('quiz_sample.quiz-one');
    }
}
