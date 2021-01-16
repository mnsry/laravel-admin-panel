<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrowseAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::guest()) {
            $user = Auth::user();
            return $user->hasPermission('browse_admin')
                        ? $next($request)
                        : response()->json('شما دسترسی ندارید!', 403);
        }
        return response()->json('ابتدا باید وارد شوید!', 401);
    }
}
