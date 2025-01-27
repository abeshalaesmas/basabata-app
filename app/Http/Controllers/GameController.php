<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function showGames(){return view('games.select-games');}


    //SHUFFLE SEN
    public function showShuffle(){ return view('shuffle.show-shuffle');}


    //QUIZ
    public function showQuiz(){ return view('games.quiz.show_quiz');}

    public function quizOne() { return view('games.quiz.quiz1'); }
    public function quizTwo() { return view('games.quiz.quiz2'); }
    public function quizThree() { return view('games.quiz.quiz3'); }
    public function quizFour() { return view('games.quiz.quiz4'); }
    public function quizFive() { return view('games.quiz.quiz5'); }
    public function quizSix() { return view('gaems.quiz.quiz6'); }
    public function quizSeven() { return view('games.quiz.quiz7'); }
    public function quizEight() { return view('games.quiz.quiz8'); }
    public function quizNine() { return view('games.quiz.quiz9'); }
    public function quizTen() { return view('games.quiz.quiz10'); }
    public function quizEleven() { return view('games.quiz.quiz11'); }
    public function quizTwelve() { return view('games.quiz.quiz12'); }
    public function quizThirteen() { return view('games.quiz.quiz13'); }
    public function quizFourteen() { return view('games.quiz.quiz14'); }
    public function quizFifteen() { return view('games.quiz.quiz15'); }
}
