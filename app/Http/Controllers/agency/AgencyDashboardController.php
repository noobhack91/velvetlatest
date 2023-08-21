<?php

namespace App\Http\Controllers\agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\UserAccount;
use DB;
use auth;
class AgencyDashboardController extends Controller
{
    //
    public function index(){

        $id = Auth::id();
        $modeluser = User::where('created_user_id', '=', $id)->get();
        $modeluserCount = $modeluser->count();
        return view('agency.dashboard')->with(['modeluserCount'=>$modeluserCount]);
        

    }
}
