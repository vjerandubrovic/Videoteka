<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    /* funkcija ako user je admin izvrši request ako nije baci na 'home' */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isAdmin()) {
            return $next($request);
        }
        return redirect('home');
    }
}
