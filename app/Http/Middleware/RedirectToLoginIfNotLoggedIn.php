<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectToLoginIfNotLoggedIn
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
        if(Auth::check()){
            return $next($request);
        }
        else{
            // echo "Fuck you.";
            return redirect('/login');
        }
    }
}
