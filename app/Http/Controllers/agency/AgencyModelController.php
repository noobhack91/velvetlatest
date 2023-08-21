<?php

namespace App\Http\Controllers\agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Modeles;
use App\Models\Country;
use App\Models\State;
use App\Models\UserVerify;
use App\Models\PrivateThing;

use App\Models\Favorite;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\Models\Page;

class AgencyModelController extends Controller
{
    //
    public function models(){

        $id=Auth::id();
        $users = User::where('role','=','model')->where('created_user_id','=',$id)->paginate(10);
        return view('agency.models.models')->with(["users"=>$users]);
    }

    public function addModel(){

        $countries = Country::get();
		return view('agency.models.signupNew')->with(['countries'=>$countries]);
        //return view('agency.models.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email',
            'country' => 'required',
            'state' => 'required',
            'role' => 'required',
            'account_type' => 'required',
            'advertising_category' => 'required',
            'confirm_age' => 'required',
            'password' => 'required|min:8',
            'phone' => 'required|regex:/^[0-9]+$/u|max:15',
        ]);
        $userauthid=Auth::id();
		$user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->created_user_id = $userauthid;
        $user->is_email_verified=1;
        $user->save();
		if(!is_null($user))
        {
            $modelmeta = new UserProfile;
            $modelmeta->phone = $request->phone;
            $modelmeta->country = $request->country;
            $modelmeta->account_type = $request->account_type;
            $modelmeta->advertising_category = $request->advertising_category;
            $modelmeta->state = $request->state;
			$modelmeta->user_id = $user->id;
			$modelmeta->save();
        }

		$token = Str::random(64);
        UserVerify::create([
              'user_id' => $user->id,
              'token' => $token
            ]);

        $to = $request->email;
        $from = env('ADMIN_EMAIL');
        $subject = "Velvet User Login Details";
        $headers  = "From: " . $from . "\r\n";
        $headers .= "Reply-To: " . $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $url=url('login');
        $message = '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: '. $request->password .'</p><p>Url: ' .$url. '</p><p>Thanks</p>';
        $mailsent=mail($to,$subject,$message, $headers);
        $url=url('login');
        $to = $request->email;
        $details = [
            'title' => 'Mail from VelvetKlub',
            'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
        ];

        $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));

        /*Mail::send('emails.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
        });*/

		return redirect(route('agency.models'))->with('message', 'Model Inserted.');

        /*$validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email',
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
            'eyes'=>'required|regex:/^[a-zA-Z]+$/u',
            'profile_photo'=>'required|mimes:jpg,png,jpeg,svg',
        ]);

        $userauthid=Auth::id();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'model';
        $user->password = bcrypt('123456');
        $user->created_user_id = $userauthid;
        $user->save();

        if(!is_null($user))
        {
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
            $modelmeta->height = $request->height;
            $modelmeta->price = $request->price;
            $modelmeta->age = $request->age;
            $modelmeta->sexuality = $request->sexuality;
            $modelmeta->hair = $request->hair;
            $modelmeta->ethnicity = $request->ethnicity;
            $modelmeta->language = $request->language;
            $modelmeta->bust = $request->bust;
            $modelmeta->waist = $request->waist;
            $modelmeta->eyes = $request->eyes;
            $modelmeta->created_user_id = $userauthid;
			$modelmeta->user_id = $user->id;
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
                    $file->user_id = $user->id;
                    $file->original_filename=$filename_original;
                    $file->filename=$name ? $name:'';
                    $file->file_path=public_path().'/gallarydata/';
                    $file->file_url=asset('/gallarydata/'.$name);
                    $file->save();
                }
            }

            $url=url('login');
            $to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
            ];

            $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));

            return redirect(route('agency.models'))->with('message', 'Model Inserted Please check email for password');
        }*/
    }

    public function edit($id){


        $id = decrypt($id);
        $user = User::where('id',$id)->with('modeles')->first();
        $modeldata = Modeles::where('user_id', '=', $id)->first();
        $gallarydata = Gallery::where('user_id', '=', $id)->first();
        $privatethings = PrivateThing::where('user_id', '=', $id)->first();
        $userprofiles = UserProfile::where('user_id', '=', $id)->first();

        if(isset($user)){

            $countryName= $userprofiles->country;
            $country = Country::where('name', '=', $countryName)->first();
             if(isset($country)){

             $country_id=$country->id;
             $states = State::where('country_id', '=', $country_id)->get();
             $pages = Page::orderBy('page_name')->get();



             return view('agency.models.completeprofile')->with(["user"=>$user,'modeldata' => $modeldata,'gallarydata' => $gallarydata,'privatethings' => $privatethings,'states' => $states,'pages'=>$pages]);

            }
        }





    }
    public function update(Request $request,$id){
        /*$id = decrypt($id);


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
                $usermodel->ethnicity = $request->ethnicity;
                $usermodel->language = $request->language;
                $usermodel->height = $request->height;
                $usermodel->bust = $request->bust;
                $usermodel->waist = $request->waist;
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
                $modelmeta->sex = $request->sex;
                $modelmeta->phone = $request->phone;
                $modelmeta->street_address = $request->street_address;
                $modelmeta->city = $request->city;
                $modelmeta->state = $request->state;
                $modelmeta->zip = $request->zip;
                $modelmeta->preferences = $request->preferences;
                $modelmeta->bio = $request->bio;
                $modelmeta->distance = $request->distance;
                $modelmeta->marital_status = $request->marital_status;
                $modelmeta->lifestyle = $request->lifestyle;
                $modelmeta->body_structure = $request->body_structure;
                $modelmeta->price = $request->price;
                $modelmeta->age = $request->age;
                $modelmeta->sexuality = $request->sexuality;
                $modelmeta->hair = $request->hair;
                $modelmeta->ethnicity = $request->ethnicity;
                $modelmeta->language = $request->language;
                $modelmeta->height = $request->height;
                $modelmeta->bust = $request->bust;
                $modelmeta->waist = $request->waist;
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

            return redirect(route('agency.models'))->with('message', 'Model Data Has Been Updated');
        }*/

                $id = decrypt($id);

        $validatedData = $request->validate([
            'gender' => 'required',
            'sexuality'=>'required',
            'age'=>'required'


        ]);

        //$id= Auth::id();
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
            $usermodel->title = $request->profile_text;
            $usermodel->description = $request->content;
            $usermodel->review = $request->reviews;
            $usermodel->clothe_covered = $request->clothe_covered;
            $usermodel->nipple_showing = $request->nipple_showing;
            $usermodel->exposed_anus = $request->exposed_anus;
            $usermodel->simulated_acts = $request->simulated_acts;
            $usermodel->logos_branding = $request->logos_branding;
            $usermodel->accessories = $request->accessories;
            $usermodel->suburb = $request->suburb;
            $usermodel->postcode = $request->postcode;
            $usermodel->state = $request->state;
            $usermodel->street_address = $request->selectedCity;
            $usermodel->fifteen_min_incall = $request->fifteen_min_incall;
            $usermodel->fifteen_min_outcall = $request->fifteen_min_outcall;
            $usermodel->thirteen_min_incall = $request->thirteen_min_incall;
            $usermodel->thirteen_min_outcall = $request->thirteen_min_outcall;
            $usermodel->fourtyfive_min_incall = $request->fourtyfive_min_incall;
            $usermodel->fourtyfive_min_outcall = $request->fourtyfive_min_outcall;
            $usermodel->hour_one_incall = $request->hour_one_incall;
            $usermodel->hour_one_outcall = $request->hour_one_outcall;
            $usermodel->onehalf_incall = $request->onehalf_incall;
            $usermodel->onehalf_outcall = $request->onehalf_outcall;
            $usermodel->twohour_incall = $request->twohour_incall;
            $usermodel->twohour_outcall = $request->twohour_outcall;
            $usermodel->threehour_incall = $request->threehour_incall;
            $usermodel->threehour_call = $request->threehour_call;
            $usermodel->ratesextra = $request->ratesextra;

            if($request->hasfile('profile_photo'))
            {
                $file=$request->file('profile_photo');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/images/', $name);
                $usermodel->image_path=public_path().'/images/';
                $usermodel->image_name=$name;
            }
            $usermodel->save();

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
            else{
                $privatething = new PrivateThing;
                $privatething->user_id = $id;
                $privatething->affectionate_cuddling = $request->affectionate_cuddling;
                $privatething->strap_on_you = $request->strap_on_you;
                $privatething->affectionate_kissing = $request->affectionate_kissing;
                $privatething->pearl_nacklace = $request->pearl_nacklace;
                $privatething->anal_play = $request->anal_play;
                $privatething->ddp = $request->ddp;
                $privatething->caning = $request->caning;
                $privatething->anal_play_on_me = $request->anal_play_on_me;
                $privatething->anal_play_on_you = $request->anal_play_on_you;
                $privatething->atm = $request->atm;
                $privatething->daty = $request->daty;
                $privatething->escort = $request->escort;
                $privatething->overnigth = $request->overnigth;
                $privatething->b_and_d = $request->b_d;
                $privatething->GS = $request->gs;
                $privatething->dfk = $request->dfk;
                $privatething->bbbj = $request->bbbj;
                $privatething->bdsm = $request->bdsm;
                $privatething->bi_twin = $request->bi_twin;
                $privatething->nurse = $request->nurse;
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
                // $privatething->school_girl = $request->school_girl;
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
                // $privatething->overnight = $request->overnight_stays;
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
            }
            User::where('id',$id)->update(['is_profile_completed' => 1]);
            return redirect(route('agency.models'))->with('message', 'Model Data Has Been Updated');
        }
        else
        {
            $modelmeta = new Modeles;
            $modelmeta->gender = $request->gender;
            $modelmeta->sexuality = $request->sexuality;
            $modelmeta->age = $request->age;
            $modelmeta->landline_number = $request->landlinenumber;
            $modelmeta->display_landline_number_public = $request->displaylandlinenumber;
            $modelmeta->display_contect_form = $request->display_contect_form;
            $modelmeta->website = $request->website;
            $modelmeta->social_media = $request->social_website;
            $modelmeta->preferred_contact_methods = $request->preferred_contact_method;
            $modelmeta->sms_messages = $request->sms_messages;
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
            $modelmeta->description = $request->content;
            $modelmeta->review = $request->reviews;
            $modelmeta->clothe_covered = $request->clothe_covered;
            $modelmeta->nipple_showing = $request->nipple_showing;
            $modelmeta->exposed_anus = $request->exposed_anus;
            $modelmeta->simulated_acts = $request->simulated_acts;
            $modelmeta->logos_branding = $request->logos_branding;
            $modelmeta->accessories = $request->accessories;
            $modelmeta->suburb = $request->suburb;
            $modelmeta->postcode = $request->postcode;
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
            $privatething->ddp = $request->ddp;
            $privatething->strap_on_you = $request->strap_on_you;
            $privatething->affectionate_kissing = $request->affectionate_kissing;
            $privatething->anal_play = $request->anal_play;
            $privatething->anal_play_on_me = $request->anal_play_on_me;
            $privatething->pearl_nacklace = $request->pearl_nacklace;
            $privatething->anal_play_on_you = $request->anal_play_on_you;
            $privatething->caning = $request->caning;
            $privatething->atm = $request->atm;
            $privatething->daty = $request->daty;
            $privatething->escort = $request->escort;
            $privatething->nurse = $request->nurse;
            $privatething->b_and_d = $request->b_d;
            $privatething->dfk = $request->dfk;
            $privatething->bbbj = $request->bbbj;
            $privatething->bdsm = $request->bdsm;
            $privatething->overnigth = $request->overnigth;
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
            $privatething->erotic_sensual_massage = $request->erotic_sensual_massage;
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
            // $privatething->school_girl = $request->school_girl;
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
            $privatething->overnigth = $request->overnigth;
            $privatething->ffm = $request->ffm;
            $privatething->save();

            User::where('id',$id)->update(['is_profile_completed' => 1]);

            return redirect(route('agency.models'))->with('message', 'Model Data Has Been Updated');
            //return redirect()->route('model.comepleteprofile')->with('message', 'Profile has been completed.');
        }
    }

    public function GallayDelete($id){

        $de_id = decrypt($id);
        $gallary=Gallery::where('id','=',$de_id);
        $gallary->delete();
        return redirect(route('agency.models'))->with('message', 'Gallay Updated');
    }

    public function delete($id)
    {

        $id = decrypt($id);

        $modeles=Modeles::where('user_id', '=', $id);
        $modeles->delete();

        $gallery=Gallery::where('user_id', '=', $id);
        $gallery->delete();

        $userprofile=UserProfile::where('user_id', '=', $id);
        $userprofile->delete();

        $PrivateThing=PrivateThing::where('user_id', '=', $id);
        $PrivateThing->delete();

        $favorite=Favorite::where('user_id', '=', $id);
        $favorite->delete();

        $users=User::find($id);
        $users->delete();

        return redirect(route('agency.models'))->with('message', 'Model Has Been deleted');

    }
}
