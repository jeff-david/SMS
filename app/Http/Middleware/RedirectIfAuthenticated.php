<?php

namespace SMS\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if ($guard == "admin"  && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }

        if ($guard == "principal"  && Auth::guard($guard)->check()) {
            return redirect('/principal');
        }

        if ($guard == "teacher"  && Auth::guard($guard)->check()) {
            return redirect('/teacher');
        }

        if ($guard == "student"  && Auth::guard($guard)->check()) {
            return redirect('/parent');
        }

        return $next($request);
    }
}
