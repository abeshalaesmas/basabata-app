<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\AuthController;

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
        Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout',[AuthController::class,'logout'])->name('logout');

        Route::get('/profile',[AuthController::class, 'profile'])->name('profile');
    });