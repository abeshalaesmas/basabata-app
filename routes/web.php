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

        Route::get('/profile',[AuthController::class, 'profile'])->name('profile');

        Route::get('/random-word', [WordController::class, 'generateRandomWord']);

        //QUIZZES
        Route::get('/quiz', [QuizController::class, 'showQuiz'])->name('showQuiz');

        //SCORE INCREMENT
        Route::post('/increment-score', [ScoreController::class, 'incrementScore'])->name('increment.score');

        //SCORE RESET(FOR TESTING ONLY)
        Route::post('/reset-score', [ScoreController::class, 'resetScore'])->name('reset.score');

        //PROFILE PICTURE UPLOAD
        Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');
        //CHAPTERS
        Route::get('/chapters-selection', [ChapterController::class, 'showChapters'])->name('showChapters');
    });


