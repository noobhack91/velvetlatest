<?php

namespace App\Http\Controllers\model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modeles;
use App\Models\Gallery;
use App\Models\PrivateThing;
use App\Models\UserProfile;
use App\Models\Country;
use App\Models\State;
use App\Models\Page;
use App\Models\Favorite;
use Session;
use Auth;
use Redirect;
class ModelProfileController extends Controller
{

    //
    public function edit($id){

		if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete  your profile.');
		}
        $id = decrypt($id);
        $user = User::where('id',$id)->with('modeles')->first();
        $usergallery = Gallery::where('user_id',$id)->get();
        return view('models.profile.edit')->with(["user"=>$user,"gallery"=>$usergallery]);
    }

    public function update(Request $request,$id){

		if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete  your profile.');
		}
        $id = decrypt($id);
        $validatedData = $request->validate([

            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email,'.$id,
            'phone' => 'required|regex:/^[0-9]+$/u|max:15',
            'street_address' => 'required',
            'city' => 'required|regex:/^[a-zA-Z]+$/u',
            'state' => 'required|regex:/^[a-zA-Z]+$/u',
            'zip' => 'required|regex:/^[0-9]+$/u|max:10',
            'sex' => 'required|regex:/^[a-zA-Z]+$/u',
            'preferences' => 'required|regex:/^[a-zA-Z]+$/u',
            'bio' => 'required',
            'distance' => 'required|regex:/^[0-9]+$/u|max:5',
            'marital_status' => 'required|regex:/^[a-zA-Z]+$/u',
            'lifestyle' => 'required|regex:/^[a-zA-Z]+$/u',
            'body_structure'=>'required|regex:/^[a-zA-Z]+$/u',
            'price'=>'required|regex:/^[0-9]+$/u|max:5',
            'age'=>'required|regex:/^[0-9]+$/u|max:3',
            'sexuality'=>'required|regex:/^[a-zA-Z]+$/u',
            'hair'=>'required|regex:/^[a-zA-Z]+$/u',
            'ethnicity'=>'required|regex:/^[a-zA-Z]+$/u',
            'language'=>'required|regex:/^[a-zA-Z]+$/u',
            'height'=>'required|regex:/^[0-9]+$/u|max:3',
            'bust'=>'required|regex:/^[0-9]+$/u|max:2',
            'waist'=>'required|regex:/^[0-9]+$/u|max:2',
            'eyes'=>'required|regex:/^[a-zA-Z]+$/u'

        ]);

        $result=User::where('id',$id)->update(['name' => $request->name,'email' => $request->email]);
        if($result==1)
        {
                $usermodel = Modeles::where('user_id',$id)->first();
                if($usermodel){
                $usermodel->sex = $request->sex;
                $usermodel->phone = $request->phone;
                $usermodel->street_address = $request->street_address;
                $usermodel->city = $request->city;
                $usermodel->state = $request->state;
                $usermodel->zip = $request->zip;
                $usermodel->preferences = $request->preferences;
                $usermodel->bio = $request->bio;
                $usermodel->distance = $request->distance;
                $usermodel->marital_status = $request->marital_status;
                $usermodel->lifestyle = $request->lifestyle;
                $usermodel->body_structure = $request->body_structure;
                $usermodel->price = $request->price;
                $usermodel->age = $request->age;
                $usermodel->sexuality = $request->sexuality;
                $usermodel->hair = $request->hair;
                // $usermodel->dress = $request->dress;
                $usermodel->ethnicity = $request->ethnicity;
                $usermodel->language = $request->language;
                $usermodel->height = $request->height;
                $usermodel->bust = $request->bust;
                $usermodel->waist = $request->waist;
                // $usermodel->hips = $request->hips;
                // $usermodel->shoe = $request->shoe;
                $usermodel->eyes = $request->eyes;
                if($request->hasfile('profile_photo'))
                {
                    $file=$request->file('profile_photo');
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path().'/images/', $name);
                    $usermodel->image_path=public_path().'/images/';
                    $usermodel->image_name=$name;

                }
                $usermodel->save();
            }
            else{
                $modelmeta = new Modeles;
                $modelmeta->phone = $request->phone;
                $modelmeta->street_address = $request->street_address;
                $modelmeta->city = $request->city;
                $modelmeta->state = $request->state;
                $modelmeta->zip = $request->zip;
                $modelmeta->sex = $request->sex;
                $modelmeta->preferences = $request->preferences;
                $modelmeta->bio = $request->bio;
                $modelmeta->distance = $request->distance;
                $modelmeta->marital_status = $request->marital_status;
                $modelmeta->lifestyle = $request->lifestyle;
                $modelmeta->body_structure = $request->body_structure;
                $usermodel->price = $request->price;
                $usermodel->age = $request->age;
                $usermodel->sexuality = $request->sexuality;
                $usermodel->hair = $request->hair;
                $usermodel->dress = $request->dress;
                $usermodel->ethnicity = $request->ethnicity;
                $usermodel->language = $request->language;
                $modelmeta->height = $request->height;
                $modelmeta->bust = $request->bust;
                $modelmeta->waist = $request->waist;
                $modelmeta->hips = $request->hips;
                $modelmeta->shoe = $request->shoe;
                $modelmeta->eyes = $request->eyes;
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
            }
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

            return redirect(route('model'))->with('message', 'Model Data Has Been Updated');
        }
    }

    public function psswordupdate($id){

		if (!Auth::user()->is_profile_completed)
        {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete  your profile.');
		}
        $id = decrypt($id);
        $user = User::where('id',$id)->first();
        return view('models.profile.passwordupdate')->with(["user"=>$user]);
    }

    public function psswordupdated(Request $request,$id)
    {

		if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete  your profile.');
		}
        $id = decrypt($id);
        $validator = $request->validate([
            'newpassword' => 'required',
            'confirmpwd' => 'required|same:newpassword',
        ],
        [
        'confirmpwd.same' => 'Password Confirmation should match the Password',
        ]);


        $newpassword=bcrypt($request->newpassword);
        $result=User::where('id',$id)->update(['password' => $newpassword]);
        if($result==1)
        {
            Session::flush();
            Auth::logout();
            return redirect('/')->with('message', 'Password Has Been Updated');
        }

    }
    //

    public function GallayDelete($id)
    {

		if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete your profile.');
		}
        $de_id = decrypt($id);
        $gallary=Gallery::where('id','=',$de_id);
        $gallary->delete();
        return Redirect::back()->with('message','Gallary Updated');
    }

    public function profile_details($id){

        if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete your profile.');
		}
        $id= Auth::id();
        $privatethings = PrivateThing::where('user_id', '=', $id)->first();
        $modeldata = Modeles::where('user_id', '=', $id)->first();
        return view('models.profile.profile_detail')->with(["modeldata"=>$modeldata,"privatethings"=>$privatethings]);
    }

    public function profile_detail_update(Request $request,$id){


        $validatedData = $request->validate([
            'gender' => 'required',
            'sexuality'=>'required',
            'age'=>'required'

        ]);

        $id= Auth::id();
        $usermodel = Modeles::where('user_id',$id)->first();
        if($usermodel)
        {
            $usermodel->gender = $request->gender;
            $usermodel->sexuality = $request->sexuality;
            $usermodel->age = $request->age;
            $usermodel->landline_number = $request->landlinenumber;
            $usermodel->display_landline_number_public = $request->displaylandlinenumber;
            $usermodel->display_contect_form = $request->display_contect_form;
            $usermodel->website = $request->website;
            $usermodel->social_media = $request->social_website;
            $usermodel->preferred_contact_methods = $request->preferred_contact_method;
            $usermodel->sms_messages = $request->sms_messages;
            $usermodel->height = $request->height;
            $usermodel->hair = $request->hair_color;
            $usermodel->hair_style = $request->hair_style;
            $usermodel->eyes = $request->eye_color;
            $usermodel->body_type = $request->body_type;
            $usermodel->bust = $request->bust_size;
            $usermodel->dress = $request->dress_size;
            $usermodel->ethnicity = $request->ethnicity;
            $usermodel->spoken_language = $request->spoken_language;
            $usermodel->escort_for = $request->escort_for;
            $usermodel->save();


            $privatethings = PrivateThing::where('user_id',$id)->first();
            if($privatethings){
                $privatethings->affectionate_cuddling = $request->affectionate_cuddling;
                $privatethings->affectionate_kissing = $request->affectionate_kissing;
                $privatethings->anal_play = $request->anal_play;
                $privatethings->ddp = $request->ddp;
                $privatethings->anal_play_on_me = $request->anal_play_on_me;
                $privatethings->anal_play_on_you = $request->anal_play_on_you;
                $privatethings->atm = $request->atm;
                $privatethings->escort = $request->escort;
                $privatethings->strap_on_you = $request->strap_on_you;
                $privatethings->caning = $request->caning;
                $privatethings->pearl_nacklace = $request->pearl_nacklace;
                $privatethings->daty = $request->daty;
                $privatethings->b_and_d = $request->b_d;
                $privatethings->GS = $request->gs;
                $privatethings->dfk = $request->dfk;
                $privatethings->bbbj = $request->bbbj;
                $privatethings->bdsm = $request->bdsm;
                $privatethings->bi_twin = $request->bi_twin;
                $privatethings->bj = $request->bj;
                $privatethings->bls = $request->bls;
                $privatethings->bondage = $request->bondage;
                $privatethings->brazilian = $request->brazilian;
                $privatethings->body_slide = $request->body_slide;
                $privatethings->cbj = $request->cbj;
                $privatethings->cbt = $request->cbt;
                $privatethings->cd = $request->cd;
                $privatethings->cim = $request->cim;
                $privatethings->cimws = $request->cimws;
                $privatethings->cob = $request->cob;
                $privatethings->cof = $request->cof;
                $privatethings->costumes = $request->costumes;
                $privatethings->costumes_and_role_play = $request->costumes_and_role_play;
                $privatethings->couples = $request->couples;
                $privatethings->dinner_companion = $request->dinner_companion;
                $privatethings->doggy_style = $request->doggy_style;
                $privatethings->dp = $request->dp;
                $privatethings->dt = $request->dt;
                $privatethings->erotic_sensual_massage = $request->erotic_sensual_massage;
                $privatethings->facial = $request->facial;
                $privatethings->fe = $request->fe;
                $privatethings->greek = $request->greek;
                $privatethings->filming = $request->filming;
                $privatethings->fire_and_ice_hot_and_cold_bj = $request->fire;
                $privatethings->gs_on_you = $request->gs_on_you;
                $privatethings->fk = $request->fk;
                $privatethings->foot_fetish = $request->foot_fetish;
                $privatethings->italian = $request->italian;
                $privatethings->gagging = $request->gagging;
                $privatethings->gfe = $request->gfe;
                $privatethings->light_spanking = $request->light_spanking;
                $privatethings->GS = $request->gs;
                $privatethings->gs_on_me = $request->gs_one;
                $privatethings->massage = $request->massage;
                $privatethings->happy_ending = $request->happy_ending;
                $privatethings->hj = $request->hj;
                $privatethings->milf = $request->milf;
                $privatethings->kissing = $request->kissing;
                $privatethings->light_bondage = $request->light_bondage;
                $privatethings->multiple_positions = $request->multiple_positions;
                $privatethings->lk = $request->lk;
                $privatethings->maid = $request->maid;
                $privatethings->natural_oral = $request->natural_oral;
                $privatethings->masturbation = $request->masturbation;
                $privatethings->mff = $request->mff;
                $privatethings->pearl_necklace = $request->pearl_necklace;
                $privatethings->mmf = $request->mmf;
                $privatethings->nurse = $request->nurse;
                $privatethings->msog = $request->msog;
                $privatethings->prostate_massage = $request->prostate_message;
                $privatethings->mutual_french_oral = $request->mutual_french;
                $privatethings->mutual_natural_oral = $request->mutual_natural_oral;
                $privatethings->rimming = $request->rimming;
                $privatethings->overnight_stays = $request->overnight_stays;
                $privatethings->role_play = $request->role_play;
                $privatethings->photography = $request->photography;
                $privatethings->police_woman = $request->police_woman;
                $privatethings->sex_toys = $request->sex_toys;
                $privatethings->pse = $request->pse;
                $privatethings->pse_with_filming = $request->pse_filming;
                $privatethings->snowballing = $request->snowballing;
                $privatethings->rimming_on_me = $request->rimming_on_me;
                $privatethings->rimming_on_you = $request->rimming;
                $privatethings->spanking_on_you = $request->spanking_on_you;
                // $privatething->school_girl = $request->school_girl;
                $privatethings->secretary = $request->secretary;
                $privatethings->strap_on = $request->strap_on_me;
                $privatethings->sexy_lingerie = $request->sexy_lingerie;
                $privatethings->sexy_shower_for_2 = $request->sexy;
                $privatethings->strip_tease = $request->strip_tease;
                $privatethings->social_escort = $request->social_escort;
                $privatethings->spanish = $request->spanish;
                $privatethings->cuddling_and_touching = $request->cuddling_and_touching;
                $privatethings->squirting = $request->squirting;
                $privatethings->mutual_masturbation = $request->mutual_masturbation;
                $privatethings->teasing = $request->teasing;
                $privatethings->tea_bagging = $request->tea_bagging;
                $privatethings->tromboning = $request->tromboning;
                $privatethings->erotic_relaxation = $request->erotic_relaxation;
                $privatethings->dirty_talk = $request->dirty_talk;
                $privatethings->full_body_massage = $request->full_body_massage;
                $privatethings->wax_play = $request->wax_play;
                $privatethings->overnight = $request->overnight;
                // $privatethings->overnight = $request->overnight_stays;
                $privatethings->passionate_kissing = $request->passionate_kissing;
                $privatethings->sissy_play = $request->sissy_play;
                $privatethings->toys = $request->toys;
                $privatethings->wrestling = $request->wrestling;
                $privatethings->full_service = $request->full_service;
                $privatethings->lactating = $request->lactating;
                $privatethings->slave_sub_play = $request->slave;
                $privatethings->nipple_manipulation = $request->nipple_manipulation;
                $privatethings->urethral_play = $request->urethral_play;
                $privatethings->electrode_play = $request->electrode_play;
                $privatethings->relief = $request->relief;
                $privatethings->cross_dressing = $request->cross_dressing;
                $privatethings->latex_leather_worship = $request->latex;
                $privatethings->boot_worship = $request->boot_worship;
                $privatethings->ball_busting = $request->ball_busting;
                $privatethings->needle_play = $request->needle_play;
                $privatethings->submissive = $request->submissive;
                $privatethings->intimidation_on_you = $request->intimidation;
                $privatethings->brown_showers = $request->brown_showers;
                $privatethings->ffm = $request->ffm;
                $privatethings->save();
            }
            return Redirect::back()->with('message','Profile Detail updated');
        }
    }

    public function profile_text_update(){

        if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete your profile.');
		}
        $id= Auth::id();
        $modeldata = Modeles::where('user_id', '=', $id)->first();
        return view('models.profile.profile_text')->with(["modeldata"=>$modeldata]);
    }

    public function profile_text_put(Request $request,$id){

        $validatedData = $request->validate([
            'profile_text'=>'required|max:100'

        ]);

        $id= Auth::id();
        $usermodel = Modeles::where('user_id',$id)->first();
        if($usermodel)
        {
            $usermodel->title = $request->profile_text;
            $usermodel->description = $request->content;
            $usermodel->review = $request->reviews;
            $usermodel->save();


            return Redirect::back()->with('message','Profile Detail updated');
        }
    }

    public function photos(){

        if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete your profile.');
		}
        $id= Auth::id();
        $user = User::where('id',$id)->with('modeles')->first();
        $usergallery = Gallery::where('user_id',$id)->get();
        return view('models.profile.photos')->with(["user"=>$user,"gallery"=>$usergallery]);

    }

    public function photos_update(Request $request,$id){

		if (!Auth::user()->is_profile_completed) {
			return redirect()->route('model.comepleteprofile')
					->with('message', 'You need to complete  your profile.');
		}
        $id = decrypt($id);

        $usermodel = Modeles::where('user_id',$id)->first();
        if($usermodel){

            if($request->hasfile('profile_photo'))
            {
                $file=$request->file('profile_photo');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/images/', $name);
                $usermodel->image_path=public_path().'/images/';
                $usermodel->image_name=$name;

            }
            $usermodel->save();
        }
        else{
            $modelmeta = new Modeles;
            if($request->hasfile('profile_photo'))
            {
                $file=$request->file('profile_photo');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/images/', $name);
                $modelmeta->image_path=public_path().'/images/';
                $modelmeta->image_name=$name;
            }
            $modelmeta->save();
        }
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

        return redirect(route('model'))->with('message', 'Model Data Has Been Updated');
        }

        public function base_location()
        {

            if (!Auth::user()->is_profile_completed)
            {
                return redirect()->route('model.comepleteprofile')
                        ->with('message', 'You need to complete your profile.');
            }
            $id= Auth::id();
            $modeldata = Modeles::where('user_id', '=', $id)->first();
            $userprofiles = UserProfile::where('user_id', '=', $id)->first();
            if(isset($userprofiles)){
                $countryName= $userprofiles->country;
                $country = Country::where('name', '=', $countryName)->first();
                 if(isset($country)){

                 $country_id=$country->id;
                 $states = State::where('country_id', '=', $country_id)->get();
                 $pages = Page::orderBy('page_name')->get();

                 return view('models.profile.base_location')->with(["modeldata"=>$modeldata,'states' => $states, 'pages'=>$pages]);
                }
            }
        }

        public function base_location_update(Request $request,$id){


            $validatedData = $request->validate([
                'suburb'=>'required|max:30',
                'postcode'=>'required|max:10',
            ]);

            $id = Auth::id();
            $modelmeta = Modeles::where('user_id',$id)->first();
            if($modelmeta)
            {
                $modelmeta->suburb = $request->suburb;
                $modelmeta->postcode = $request->postcode;
                $modelmeta->street_address = $request->selectedCity;
                $modelmeta->state = $request->state;
                $modelmeta->fifteen_min_incall = $request->fifteen_min_incall;
                $modelmeta->fifteen_min_outcall = $request->fifteen_min_outcall;
                $modelmeta->thirteen_min_incall = $request->thirteen_min_incall;
                $modelmeta->thirteen_min_outcall = $request->thirteen_min_outcall;
                $modelmeta->fourtyfive_min_incall = $request->fourtyfive_min_incall;
                $modelmeta->fourtyfive_min_outcall = $request->fourtyfive_min_outcall;
                $modelmeta->hour_one_incall = $request->hour_one_incall;
                $modelmeta->hour_one_outcall = $request->hour_one_outcall;
                $modelmeta->onehalf_incall = $request->onehalf_incall;
                $modelmeta->onehalf_outcall = $request->onehalf_outcall;
                $modelmeta->twohour_incall = $request->twohour_incall;
                $modelmeta->twohour_outcall = $request->twohour_outcall;
                $modelmeta->threehour_incall = $request->threehour_incall;
                $modelmeta->threehour_call = $request->threehour_call;
                $modelmeta->ratesextra = $request->ratesextra;
                $modelmeta->save();
            }

            return redirect(route('model'))->with('message', 'Model Data Has Been Updated');
        }

        public function avaliablity(){

            if (!Auth::user()->is_profile_completed) {
                return redirect()->route('model.comepleteprofile')
                        ->with('message', 'You need to complete your profile.');
            }
            $id= Auth::id();
            $modeldata = Modeles::where('user_id', '=', $id)->first();
            return view('models.profile.avaliablity')->with(["modeldata"=>$modeldata]);

        }

        public function avaliablityupdate()
        {


        }

        public function verification(){

            if (!Auth::user()->is_profile_completed) {
                return redirect()->route('model.comepleteprofile')
                        ->with('message', 'You need to complete your profile.');
            }
            $id= Auth::id();
            $modeldata = Modeles::where('user_id', '=', $id)->first();
            $user= User::where('id', '=', $id)->where('image_verification_status','=','0')->first();

            $id= Auth::id();
            $customefav = Favorite::where('model_id', '=', $id)->get();
            $favCount = $customefav->count();

            if($user){
            return view('models.profile.verification')->with(["modeldata"=>$modeldata]);
            }else{
                return view('models.dashboard')->   with(['favCount' => $favCount]);

            }
        }

        public function selfie(Request $request)
        {

            $validatedData = $request->validate(
                [
                'image_data_url'=>'required'

            ]);

        if ($request->has('image_data_url'))
        {

            $id = Auth::id();
            $modelmeta = Modeles::where('user_id',$id)->first();

            $image=$request->input('image_data_url');
            $image = str_replace('data:image/jpeg;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageData = base64_decode($image);
            $imageName = 'image_'.rand(1,100).'.'.'jpeg';
            $imagePath = public_path('/images/selfies/' . $imageName);
            file_put_contents($imagePath, $imageData);

            if($imageData)
            {
                // User::where('id',$id)->update(['image_verification_status' => 0]);

                $modelmeta->selfie = $imageName;
                $modelmeta->save();

                return json_encode(array('message'=>'Done','status'=>'true','code'=>200));
                die();
            }
        }
        return response()->json(['message' => 'No image found'], 400);
    }

}
