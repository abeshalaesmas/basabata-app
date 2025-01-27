<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function showGames(){return view('games.select-games');}


    //SHUFFLE SEN
    public function showShuffle(){ return view('shuffle.show-shuffle');}


    //QUIZ
    public function showQuiz(){ return view('quiz.show_quiz');}

    public function quizOne() { return view('quiz.quiz1'); }
    public function quizTwo() { return view('quiz.quiz2'); }
    public function quizThree() { return view('quiz.quiz3'); }
    public function quizFour() { return view('quiz.quiz4'); }
    public function quizFive() { return view('quiz.quiz5'); }
    public function quizSix() { return view('quiz.quiz6'); }
    public function quizSeven() { return view('quiz.quiz7'); }
    public function quizEight() { return view('quiz.quiz8'); }
    public function quizNine() { return view('quiz.quiz9'); }
    public function quizTen() { return view('quiz.quiz10'); }
    public function quizEleven() { return view('quiz.quiz11'); }
    public function quizTwelve() { return view('quiz.quiz12'); }
    public function quizThirteen() { return view('quiz.quiz13'); }
    public function quizFourteen() { return view('quiz.quiz14'); }
    public function quizFifteen() { return view('quiz.quiz15'); }



   
}
