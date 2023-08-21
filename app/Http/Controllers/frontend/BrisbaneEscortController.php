<?php

namespace App\Http\Controllers\frontend;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Modeles;
use App\Models\Blog;
class BrisbaneEscortController extends Controller
{
    //
    public function index(){
       
       $meta_title="Brisbane Escort | Escort Services in brisbane";
       $meta_dsecription="Find the best escort service in brisbane. 100% verified account. No hidden charges. Live cam. Immediately response. Best Escort Listing site. High Profile Escort Listing.";
       $data=array('meta_title'=>$meta_title,'meta_dsecription'=>$meta_dsecription);
       return view('pages.brisbane-escort')->with('meta_data',$data);
    }
    
    
}