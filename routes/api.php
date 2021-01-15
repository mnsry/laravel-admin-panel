<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\RoleController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\Panel\SidebarController;
use App\Http\Controllers\Panel\ProductController;

Route::group(['middleware' => ['auth:sanctum', 'browse.admin']], function (){
    Route::apiResource('role', RoleController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('sidebar', SidebarController::class);
    Route::apiResource('product', ProductController::class);
});
