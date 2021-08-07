<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdviserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->user()->isAdvisor()) {
            abort('404');
        }

        return $next($request);
    }
}
