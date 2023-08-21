<?php

namespace App\Http\Controllers\model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Modeles;
use App\Models\Gallery;
use App\Models\PrivateThing;
use Auth;

class ModelDashboardController extends Controller
{
    //
    //
	
    public function index(){
        
		if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete  your profile.');
		} 
        $id= Auth::id();
        $customefav = Favorite::where('model_id', '=', $id)->get();
        $favCount = $customefav->count();

        return view('client.dashboard')->with(['favCount' => $favCount]);

        return view('models.dashboard')->with(['favCount' => $favCount]);
    }
	
	public function completeProfile(){

        $id= Auth::id();
        $modeldata = Modeles::where('user_id', '=', $id)->first();
        $gallarydata = Gallery::where('user_id', '=', $id)->first();
        $privatethings = PrivateThing::where('user_id', '=', $id)->first();

		return view('models.completeprofile')->with(['modeldata' => $modeldata,'gallarydata' => $gallarydata,'privatethings' => $privatethings]);
	}

    public function createModel(Request $request){

        $validatedData = $request->validate([
            'gender' => 'required|regex:/^[a-zA-Z ]+$/u',
        ]);

        $id= Auth::id();
        $usermodel = Modeles::where('user_id',$id)->first();
        if($usermodel)
        {
           
        }
        else{
            $modelmeta = new Modeles;
            $modelmeta->gender = $request->gender;
            $modelmeta->sexuality = $request->sexuality;
            $modelmeta->age = $request->age;
            $modelmeta->landline_number = $request->landlinenumber;
            $modelmeta->display_landline_number_public = $request->display_contect_form;
            $modelmeta->website = $request->website;
            $modelmeta->social_media = $request->social_website;
            $modelmeta->preferred_contact_methods = $request->preferred_contact_method;
            $modelmeta->height = $request->height;
            $modelmeta->hair = $request->hair_color;
            $modelmeta->hair_style = $request->hair_style;
            $modelmeta->eyes = $request->eye_color;
            $modelmeta->body_type = $request->body_type;
            $modelmeta->bust = $request->bust_size;
            $modelmeta->dress = $request->dress_size;
            $modelmeta->ethnicity = $request->ethnicity;
            $modelmeta->spoken_language = $request->spoken_language;
            $modelmeta->escort_for = $request->escort_for;
            $modelmeta->title = $request->profile_text;
            $modelmeta->description = $request->description;
            $modelmeta->review = $request->reviews;
            $modelmeta->user_id = $id;
            if($request->hasfile('profile_photo'))
            {
                $file=$request->file('profile_photo');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/images/', $name);  
                $modelmeta->image_path=public_path().'/images/';
                $modelmeta->image_name=$name;
            }
            $modelmeta->save();

            if($request->hasfile('gallary'))
            {
                foreach($request->file('gallary') as $file)
                {
                    $filename_original=$file->getClientOriginalName();
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path().'/gallarydata/', $name);
                    $file= new Gallery();
                    $file->user_id = $id;
                    $file->original_filename=$filename_original;
                    $file->filename=$name ? $name:'';
                    $file->file_path=public_path().'/gallarydata/';
                    $file->file_url=asset('/gallarydata/'.$name);
                    $file->save(); 
                }
            }
            $privatething = new PrivateThing;
            $privatething->user_id = $id;
            $privatething->affectionate_cuddling = $request->affectionate_cuddling;
            $privatething->affectionate_kissing = $request->affectionate_kissing;
            $privatething->anal_play = $request->anal_play;
            $privatething->anal_play_on_me = $request->anal_play_on_me;
            $privatething->anal_play_on_you = $request->anal_play_on_you;
            $privatething->atm = $request->atm;
            $privatething->b_and_d = $request->b_d;
            $privatething->bbbj = $request->bbbj;
            $privatething->bdsm = $request->bdsm;
            $privatething->bi_twin = $request->bi_twin;
            $privatething->bj = $request->bj;
            $privatething->bls = $request->bls;
            $privatething->bondage = $request->bondage;
            $privatething->brazilian = $request->brazilian;
            $privatething->body_slide = $request->body_slide;
            $privatething->cbj = $request->cbj;
            $privatething->cbt = $request->cbt;
            $privatething->cd = $request->cd;
            $privatething->cim = $request->cim;
            $privatething->cimws = $request->cimws;
            $privatething->cob = $request->cob;
            $privatething->cof = $request->cof;
            $privatething->costumes = $request->costumes;
            $privatething->costumes_and_role_play = $request->costumes_and_role_play;
            $privatething->couples = $request->couples;
            $privatething->dinner_companion = $request->dinner_companion;
            $privatething->doggy_style = $request->doggy_style;
            $privatething->dp = $request->dp;
            $privatething->dt = $request->dt;
            $privatething->erotic_sensual_massage = $request->erotic_sansual_massage;
            $privatething->facial = $request->facial;
            $privatething->fe = $request->fe;
            $privatething->greek = $request->greek;
            $privatething->filming = $request->filming;
            $privatething->fire_and_ice_hot_and_cold_bj = $request->fire;
            $privatething->gs_on_you = $request->gs_on_you;
            $privatething->fk = $request->fk;
            $privatething->foot_fetish = $request->foot_fetish;
            $privatething->italian = $request->italian;
            $privatething->gagging = $request->gagging;
            $privatething->gfe = $request->gfe;
            $privatething->light_spanking = $request->light_spanking;
            $privatething->GS = $request->gs;
            $privatething->gs_on_me = $request->gs_one;
            $privatething->massage = $request->massage;
            $privatething->happy_ending = $request->happy_ending;
            $privatething->hj = $request->hj;
            $privatething->milf = $request->milf;
            $privatething->kissing = $request->kissing;
            $privatething->light_bondage = $request->light_bondage;
            $privatething->multiple_positions = $request->multiple_positions;
            $privatething->lk = $request->lk;
            $privatething->maid = $request->maid;
            $privatething->natural_oral = $request->natural_oral;
            $privatething->masturbation = $request->masturbation;
            $privatething->mff = $request->mff;
            $privatething->pearl_necklace = $request->pearl_necklace;
            $privatething->mmf = $request->mmf;
            $privatething->msog = $request->msog;
            $privatething->prostate_massage = $request->prostate_message;
            $privatething->mutual_french_oral = $request->mutual_french;
            $privatething->mutual_natural_oral = $request->mutual_natural_oral;
            $privatething->rimming = $request->rimming;
            $privatething->overnight_stays = $request->overnight_stays;
            $privatething->role_play = $request->role_play;
            $privatething->photography = $request->photography;
            $privatething->police_woman = $request->police_woman;
            $privatething->sex_toys = $request->sex_toys;
            $privatething->pse = $request->pse;
            $privatething->pse_with_filming = $request->pse_filming;
            $privatething->snowballing = $request->snowballing;
            $privatething->rimming_on_me = $request->rimming_on_me;
            $privatething->rimming_on_you = $request->rimming;
            $privatething->spanking_on_you = $request->spanking_on_you;
            $privatething->school_girl = $request->school_girl;
            $privatething->secretary = $request->secretary;
            $privatething->strap_on = $request->strap_on_me;
            $privatething->sexy_lingerie = $request->sexy_lingerie;
            $privatething->sexy_shower_for_2 = $request->sexy;
            $privatething->strip_tease = $request->strip_tease;
            $privatething->social_escort = $request->social_escort;
            $privatething->spanish = $request->spanish;
            $privatething->cuddling_and_touching = $request->cuddling_and_touching;
            $privatething->squirting = $request->squirting;
            $privatething->mutual_masturbation = $request->mutual_masturbation;
            $privatething->teasing = $request->teasing;
            $privatething->tea_bagging = $request->tea_bagging;
            $privatething->tromboning = $request->tromboning;
            $privatething->erotic_relaxation = $request->erotic_relaxation;
            $privatething->dirty_talk = $request->dirty_talk;
            $privatething->full_body_massage = $request->full_body_massage;
            $privatething->wax_play = $request->wax_play;
            $privatething->overnight = $request->overnight_stays;
            $privatething->passionate_kissing = $request->passionate_kissing;
            $privatething->sissy_play = $request->sissy_play;
            $privatething->toys = $request->toys;
            $privatething->wrestling = $request->wrestling;
            $privatething->full_service = $request->full_service;
            $privatething->lactating = $request->lactating;
            $privatething->slave_sub_play = $request->slave;
            $privatething->nipple_manipulation = $request->nipple_manipulation;
            $privatething->urethral_play = $request->urethral_play;
            $privatething->electrode_play = $request->electrode_play;
            $privatething->relief = $request->relief;
            $privatething->cross_dressing = $request->cross_dressing;
            $privatething->latex_leather_worship = $request->latex;
            $privatething->boot_worship = $request->boot_worship;
            $privatething->ball_busting = $request->ball_busting;
            $privatething->needle_play = $request->needle_play;
            $privatething->submissive = $request->submissive;
            $privatething->intimidation_on_you = $request->intimidation;
            $privatething->brown_showers = $request->brown_showers;
            $privatething->ffm = $request->ffm;
            $privatething->save();
            return redirect()->route('model.comepleteprofile')->with('message', 'You need to complete your profile.');
        }

    }
}
