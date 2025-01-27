<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function showGames(){return view('games.select-games');}


    //SHUFFLE SEN
    public function showShuffle(){ return view('games.shuffle.show-shuffle');}

    public function shuffleOne() { return view('games.shuffle.shuffle-sen1'); }
    public function shuffleTwo() { return view('games.shuffle.shuffle-sen2'); }
    public function shuffleThree() { return view('games.shuffle.shuffle-sen3'); }
    public function shuffleFour() { return view('games.shuffle.shuffle-sen4'); }
    public function shuffleFive() { return view('games.shuffle.shuffle-sen5'); }
    public function shuffleSix() { return view('games.shuffle.shuffle-sen6'); }
    public function shuffleSeven() { return view('games.shuffle.shuffle-sen7'); }
    public function shuffleEight() { return view('games.shuffle.shuffle-sen8'); }
    public function shuffleNine() { return view('games.shuffle.shuffle-sen9'); }
    public function shuffleTen() { return view('games.shuffle.shuffle-sen10'); }
    public function shuffleEleven() { return view('games.shuffle.shuffle-sen11'); }
    public function shuffleTwelve() { return view('games.shuffle.shuffle-sen12'); }
    public function shuffleThirteen() { return view('games.shuffle.shuffle-sen13'); }
    public function shuffleFourteen() { return view('games.shuffle.shuffle-sen14'); }
    public function shuffleFifteen() { return view('games.shuffle.shuffle-sen15'); }


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
