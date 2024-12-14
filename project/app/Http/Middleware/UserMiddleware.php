<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // user role = 0
        // admin role = 1
        if(Auth::check())
        {
            if(Auth::user()->usertype=='0'){
                return $next($request);
            }
            else{
                return redirect()->back();// access denied as you are an admin
                //return redirect('/home')->with('message','Aceess denied as you are an admin');
            }
        }
        else{
            return redirect()->back()->with('message','Access Denied as you are not logged in');
        }
        
    }
}
