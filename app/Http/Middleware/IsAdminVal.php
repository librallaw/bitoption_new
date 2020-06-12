<?php

namespace App\Http\Middleware;


use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IsAdminVal
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
        if(Auth::user()->level == 1){
            return Redirect::route('showAdminDashboard');
            exit;
        }
        return $next($request);
    }
}
