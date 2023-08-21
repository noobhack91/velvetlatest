<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\UserAccount;
use DB;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //

    public function index(){

        $customeruser = User::where('role', '=', 'customer')->get();
        $customerCount = $customeruser->count();
        
        $countmodel = User::where('role', '=', 'model')->get();
        $countmodel = $countmodel->count();
        
        $countagency = User::where('role', '=', 'agency')->get();
        $countagency = $countagency->count();
        
        
        return view('admin.dashboard')->with(['customeruser'=>$customerCount,'countmodel'=>$countmodel,'countagency'=>$countagency]);
    }

    public function getreports(){

        return view('admin.dashboard.report');
        
    }

    public function reports(Request $request){
        
        $validatedData = $request->validate([
            'start_date' => 'required',
            'end_date' => 'required'
           
        ]);

       $start_date = $request->start_date;
       $end_date = $request->end_date;
       $currentuser = auth()->user();
       $id=$currentuser->id;

       $payments = Payment:: select('*')->selectSub(function ($query) use ($id) {
        $query->selectRaw("IF(to_id = ".$id.", 'credit', 'debit')");
    }, 'type')->whereBetween('created_at', [$start_date, $end_date])
    ->get();

    $balance = DB::select("SELECT in_amount - out_amount as balance
FROM (SELECT coalesce(SUM(amount),0) as in_amount
      FROM payments
      WHERE to_id = $id and status='completed' and (created_at BETWEEN '$start_date' AND '$end_date')
     ) i JOIN
     (SELECT coalesce(SUM(amount),0) as out_amount
      FROM payments
      WHERE from_id = $id and status='completed' and (created_at BETWEEN '$start_date' AND '$end_date')
     ) o");

     
    
     

    return view('admin.dashboard.report')->with(["payments"=>$payments,"balance"=>$balance[0]->balance,"start_date"=>$start_date,"end_date"=>$end_date]);

    

        
        
    }
}
