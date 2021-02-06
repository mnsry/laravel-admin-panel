<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\RoleController;
use App\Http\Controllers\Panel\UserController;
use App\Http\Controllers\Panel\SidebarController;
use App\Http\Controllers\Panel\ProductController;
use App\Http\Controllers\Panel\MessageController;
use App\Http\Controllers\Panel\CategoryController;

/**
 * @note Route Panel For CRUD
 */
Route::group(['middleware' => ['auth:sanctum', 'browse.admin']], function (){
    Route::apiResource('role', RoleController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('sidebar', SidebarController::class);
    Route::apiResource('product', ProductController::class);
    Route::apiResource('message',MessageController::class);
    Route::apiResource('category',CategoryController::class);
});
