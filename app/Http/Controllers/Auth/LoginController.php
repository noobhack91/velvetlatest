<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = '/home';
    // protected function redirectTo()
    // {
       
    //     if (auth()->user()->role == 'admin') {
    //         return '/admin';
    //     }
    //     return '/home';
    // }

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
       /*  
       $check_user = User::where('email',$input['email'])->first();

       if(!empty($check_user->delegated_user_id)):
        $delegated_user = User::find($check_user->delegated_user_id);
       else:
        $delegated_user = '';
       endif;

       $email = $input['email'];
       if(isset($delegated_user) && !empty($delegated_user)):
        $email = $delegated_user->email;
       endif;

        */


        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
           
            if(!empty(auth()->user()->delegated_user_id)):
               
                $delegated_user  =User::find(auth()->user()->delegated_user_id);
                
                if(!empty($delegated_user)):
                    Auth::loginUsingId($delegated_user->id);

                    //Auth::setUser($delegated_user);


                endif;

            endif;

            
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }else if (auth()->user()->role == 'customer') {
               
               return redirect()->route('customer');
            }else if (auth()->user()->role == 'model') {
               return redirect()->route('model');
           }else if (auth()->user()->role == 'agency') {
            return redirect()->route('agency');
        }
            else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}
