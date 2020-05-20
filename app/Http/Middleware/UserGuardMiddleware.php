<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserGuardMiddleware
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
        $role=Auth::user()->user_role;
        
        if ( $role !='user')
        {
            return back()->with('errors','You have no permissions to access beyond this point');        
        }
        else
        {
            return $next($request);
        }
    }
}
