<?php

namespace App\Http\Controllers\frontend;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Modeles;
use App\Models\Blog;
class FrontHomeController extends Controller
{
    public function index(Request $request){

       $session = $request->session();
       $models=User::where([["role","=","model"],["is_profile_completed","=","1"]])->orderBy('id','desc')->with('modeles')->get();
       $blogs = Blog::orderBy('id','desc')->paginate(20);
       return view("pages.home")->with(['models'=>$models,'blogs'=>$blogs]);

    }

    public function searchhome(){

        $name = $request->get('name');
        $location = $request->get('location');
        $userid = $request->get('userid');

        $where = '';
		if(isset($name) && $name!=''){
            
            $where .= 'AND users.name = "'.$name.'"';

		}
		if(isset($location) && $location!=''){

            $where .= 'AND models.city = "'.$location.'"';
		}
        if(isset($userid) && $userid!=''){

            $where .= 'AND users.id = "'.$userid.'"';
		}

        $result = DB::select("SELECT * from users INNER JOIN models
        ON users.id = models.user_id where users.role='model' $where");

        return view('pages.home')->with(["result"=>$result]);
    }
}
