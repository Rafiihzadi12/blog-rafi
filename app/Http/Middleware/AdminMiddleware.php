<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Requests;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\RedirectResponse);
     * @param \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role_as)
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('message', 'Access Denied! As you are not an Admin');
            }
        }
        else
        {
            return redirect('/login')->with('message', 'Please Login First');
        }
    }
}