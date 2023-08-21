<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\UserAccount;
use DB;
use App\Models\Favorite;
use Auth;
class ClientDashboardController extends Controller
{
    //

    public function index(){
        
        $id= Auth::id();
       
        $customefav = Favorite::where('user_id', '=', $id)->get();
        $favCount = $customefav->count();

        return view('client.dashboard')->with(['favCount' => $favCount]);
    }

    
}
