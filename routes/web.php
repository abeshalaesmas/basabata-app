<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/chapters', [InsertController::class, 'show'])->name('show');

Route::get('/chapters/{id}', [InsertController::class, 'showOne'])->name('showOne');

Route::get('/insert', [InsertController::class, 'insert'])->name('show');

Route::post('/chapters', [InsertController::class, 'store'])->name('store');

Route::delete('/chapter/delete/{id}', [InsertController::class, 'delete'])->name('delete');
