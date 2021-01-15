<?php

use Illuminate\Support\Facades\Route;

Route::domain('storage.laranuxt.ir')->group(function () {
    Route::get('/', function () {
        return response(['message' => 'https://storage.laranuxt.ir']);
    });
});

Auth::routes();

Route::get('/', function () {
   return view('welcome');
});

Route::get('/home', function () {
    return response()->json('home', 200);
})->name('home')->middleware('auth');
