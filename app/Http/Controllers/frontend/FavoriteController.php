<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Favorite;
class FavoriteController extends Controller
{
    //
    public function favorite(Request $request){

        $validatedData=$request->validate([
            'model_id' => 'required',
            'liked'=>'required'
        ]);

        if(Auth::check())
        {
            if(isset($request->liked) && $request->liked!=''){

                if($request->liked=='true'){

                    $favorite=Favorite::where('user_id','=',Auth::id())->first();
                    $favorite->delete();
                    return json_encode(array('message'=>'Done','status'=>'true','code'=>200));
                    die();

                }
                else{
                    $favorite = new Favorite;
                    $favorite->model_id = $request->model_id;
                    $favorite->user_id = Auth::id();
                    $favorite->save();
                    if(!is_null($favorite))
                    {
                        return json_encode(array('message'=>'Done','status'=>'true','code'=>200));
                        die();
                    }
                }
            }
        }
        else{

            return json_encode(array('message'=>'Please login before doing add to favorite',"redirect_url"=>url('login'),'status'=>'false','code'=>400));
            die();
        }



    }
}
