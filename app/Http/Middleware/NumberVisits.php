<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User\PersonalNumberVisit;

class NumberVisits
{
    /**
     * @note Add Number Of Visits
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        PersonalNumberVisit::increment('seen');

        return $next($request);
    }
}
