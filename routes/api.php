<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('nav/sidebar', function(){
    $drawer = [
        [
            'text' => 'داشبورد',
            'icon' => 'mdi-view-dashboard-variant',
            'items' => [['text' => 'داشبورد']],
        ],
        [
            'text' => 'کاربران',
            'icon' => 'mdi-account-multiple',
            'items' => [['text' => 'کاربران'],['text' => 'کاربران']],
            'active' => true,
        ],
        [
            'text' => 'اشتراک',
            'icon' => 'mdi-account-multiple',
            'items' => [['text' => 'اشتراک']],
        ],
    ];
    return response()->json($drawer, 200);
});