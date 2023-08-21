<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agency;
class FrontAgencyController extends Controller
{
    //
    
    public function index(){

        $users = User::where('role','=','agency')->with('UserAgency')->paginate(10);
        return view('pages.agency')->with(["users"=>$users]);

    }

    public function detail($id){
        $id= decrypt($id);
        $users = User::where('role','=','model')->where('created_user_id','=',$id)->paginate(10);
        return view('pages.models')->with(["models"=>$users]);
    }
}
