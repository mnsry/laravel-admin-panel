<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class, 'index']);

Route::get('about',[WebController::class,'show_about']);
//Route::get('contactme',[WebController::class,'show_contact']);

Route::get('contactme','WebController@show_contact');
