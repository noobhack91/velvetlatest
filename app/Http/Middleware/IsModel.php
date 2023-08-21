<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsModel
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
        if(auth()->user()->role == 'model'){
           
            if (!auth()->user()->is_email_verified) {
				auth()->logout();
				return redirect()->route('login')
						->with('message', 'You need to confirm your account. We have sent you an activation code, please check your email.');
			}
			
			/* if (!auth()->user()->is_profile_completed) {
				return redirect()->route('model.comepleteprofile')
						->with('message', 'You need to complete  your profile.');
			} */
            return $next($request);

        }
   
        return redirect('home')->with('error',"You don't have admin access.");
        //return $next($request);
    }
}
