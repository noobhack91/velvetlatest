<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cookie;
class IsAdult
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //print_r(auth()->user());
       // exit;
        //return $next($request);
        if(isset($_COOKIE['isAdult'])){
            
           
            return $next($request);
        }
   
        return redirect('enter')->with('error',"Please confirm Your age.");
    }
}
