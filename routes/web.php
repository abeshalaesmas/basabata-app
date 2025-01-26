<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ChapterController;



Route::get('/', function () {
    return view('welcome');
});


// CRUD
    Route::get('/chapters', [InsertController::class, 'show'])->name('show');
    Route::get('/chapters/{id}', [InsertController::class, 'showOne'])->name('showOne');
    Route::get('/insert', [InsertController::class, 'insert'])->name('insert');
    Route::post('/chapters', [InsertController::class, 'store'])->name('store');
    Route::get('/chapter/edit/{id}', [InsertController::class, 'edit'])->name('edit');
    Route::put('/chapter/{id}', [InsertController::class, 'update'])->name('update');
    Route::delete('/chapter/delete/{id}', [InsertController::class, 'delete'])->name('delete');

// NORMAL AUTH
    Route::middleware('guest')->group(function(){

        //ROUTES
        Route::get('/register',[AuthController::class,'registerForm'])->name('register');
        Route::post('/register',[AuthController::class,'register'])->name('register.process');

        //LOGIN
        Route::get('/login',[AuthController::class,'loginForm'])->name('login');
        Route::post('/login',[AuthController::class,'login'])->name('login.process');
    });
        //DASHBOARD
    Route::middleware('auth')->group(function(){
        //CUSTOMIZE USER'S PROFILE
        Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
        Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');

        //USER DASHBOARD
        Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');

        Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/random-word', [WordController::class, 'generateRandomWord']);

        //QUIZZES
        Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('showQuiz');
        Route::get('/quiz/1', [QuizController::class, 'quizOne'])->name('quiz-one');

        //SCORE INCREMENT
        Route::post('/increment-score', [ScoreController::class, 'incrementScore'])->name('increment.score');

        //SCORE RESET(FOR TESTING ONLY)
        Route::post('/reset-score', [ScoreController::class, 'resetScore'])->name('reset.score');

        //PROFILE PICTURE UPLOAD
        Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');
        //CHAPTERS
        Route::get('/chapters-selection', [ChapterController::class, 'showChapters'])->name('showChapters');
        Route::get('/chapter1', [ChapterController::class, 'showChapter1'])->name('chapter1');
        Route::get('/chapter2', [ChapterController::class, 'showChapter2'])->name('chapter2');
        Route::get('/chapter3', [ChapterController::class, 'showChapter3'])->name('chapter3');
        Route::get('/chapter4', [ChapterController::class, 'showChapter4'])->name('chapter4');
        Route::get('/chapter5', [ChapterController::class, 'showChapter5'])->name('chapter5');
        Route::get('/chapter6', [ChapterController::class, 'showChapter6'])->name('chapter6');
        Route::get('/chapter7', [ChapterController::class, 'showChapter7'])->name('chapter7');
        Route::get('/chapter8', [ChapterController::class, 'showChapter8'])->name('chapter8');
        Route::get('/chapter9', [ChapterController::class, 'showChapter9'])->name('chapter9');
        Route::get('/chapter10', [ChapterController::class, 'showChapter10'])->name('chapter10');
        Route::get('/chapter11', [ChapterController::class, 'showChapter11'])->name('chapter11');
        Route::get('/chapter12', [ChapterController::class, 'showChapter12'])->name('chapter12');
        Route::get('/chapter13', [ChapterController::class, 'showChapter13'])->name('chapter13');
        Route::get('/chapter14', [ChapterController::class, 'showChapter14'])->name('chapter14');
        Route::get('/chapter15', [ChapterController::class, 'showChapter15'])->name('chapter15');
        Route::get('/chapter16', [ChapterController::class, 'showChapter16'])->name('chapter16');
        Route::get('/chapter17', [ChapterController::class, 'showChapter17'])->name('chapter17');
        Route::get('/chapter18', [ChapterController::class, 'showChapter18'])->name('chapter18');
        Route::get('/chapter19', [ChapterController::class, 'showChapter19'])->name('chapter19');
        Route::get('/chapter20', [ChapterController::class, 'showChapter20'])->name('chapter20');
        Route::get('/chapter21', [ChapterController::class, 'showChapter21'])->name('chapter21');
        Route::get('/chapter22', [ChapterController::class, 'showChapter22'])->name('chapter22');
        Route::get('/chapter23', [ChapterController::class, 'showChapter23'])->name('chapter23');
        Route::get('/chapter24', [ChapterController::class, 'showChapter24'])->name('chapter24');
        Route::get('/chapter25', [ChapterController::class, 'showChapter25'])->name('chapter25');
        Route::get('/chapter26', [ChapterController::class, 'showChapter26'])->name('chapter26');
        Route::get('/chapter27', [ChapterController::class, 'showChapter27'])->name('chapter27');
        Route::get('/chapter28', [ChapterController::class, 'showChapter28'])->name('chapter28');
        Route::get('/chapter29', [ChapterController::class, 'showChapter29'])->name('chapter29');
        Route::get('/chapter30', [ChapterController::class, 'showChapter30'])->name('chapter30');
        Route::get('/chapter31', [ChapterController::class, 'showChapter31'])->name('chapter31');
        Route::get('/chapter32', [ChapterController::class, 'showChapter32'])->name('chapter32');
        Route::get('/chapter33', [ChapterController::class, 'showChapter33'])->name('chapter33');
        Route::get('/chapter34', [ChapterController::class, 'showChapter34'])->name('chapter34');
        Route::get('/chapter35', [ChapterController::class, 'showChapter35'])->name('chapter35');
        Route::get('/chapter36', [ChapterController::class, 'showChapter36'])->name('chapter36');
        Route::get('/chapter37', [ChapterController::class, 'showChapter37'])->name('chapter37');
        Route::get('/chapter38', [ChapterController::class, 'showChapter38'])->name('chapter38');
        Route::get('/chapter39', [ChapterController::class, 'showChapter39'])->name('chapter39');

        
        //GAME 3
        Route::get('/game3', [ChapterController::class, 'showGame3'])->name('game3');

        //GLOSSARY
        Route::get('/glossary', [ChapterController::class, 'showGlossary'])->name('glossary');

    });


