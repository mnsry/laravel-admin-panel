<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;

class BrowseAdmin
{
    /**
     * @note For See Admin Panel, Should Have Key: 'browse_admin'
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::guest()) {
            $user = Auth::user();
            return $user->hasPermission('browse_admin')
                ? $next($request)
                : abort(403, 'دسترسی وجود ندارد!');
        }
        return abort(401, 'ابتدا باید وارد شوید!');
    }
}
