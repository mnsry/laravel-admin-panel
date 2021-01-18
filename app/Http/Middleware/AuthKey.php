<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthKey
{
    /**
     * @note This Middleware Not Use In Project
     * @note If Header Has { 'APP_KEY': 'ABCD1234' } Next Middleware
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('APP_KEY');
        if($token != 'ABCD1234'){
            return response()->json('کلید هدر| APP_KEY | پیدا نشد!', 401);
        }
        return $next($request);
    }
}
