<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Support\Facades\Auth;
class AuthenticeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }else{
            return Redirect::to('/login');
        }
        
    }
}
