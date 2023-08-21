<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modeles;
use App\Models\UserMeta;
use App\Models\UserAccount;
use App\Models\UserVerify;
use App\Models\UserProfile;
use Session;
use Hash;
use Illuminate\Support\Str;
use Mail; 
class SignupController extends Controller
{
    //
	
	
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
		$user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
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

            /* $url=url('login');
            $to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
            ];
            $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));
            return redirect(url('login'))->with('message', 'Model Inserted. Please check email for password'); */
        }
		
		$token = Str::random(64);
        UserVerify::create([
              'user_id' => $user->id, 
              'token' => $token
            ]);
  
        Mail::send('emails.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
        });
		
		return redirect(url('login'))->with('message', 'Model Inserted. Please check email for password');
         
	 }

    public function store_old(Request $request){
        
        session()->put('modeldata', '1');
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email',
            'phone' => 'required|regex:/^[0-9]+$/u|max:15',
            'street_address' => 'required',
            'city' => 'required|regex:/^[a-zA-Z]+$/u',
            'state' => 'required|regex:/^[a-zA-Z]+$/u',
            'zip' => 'required|regex:/^[0-9]+$/u|max:10',
            'sex' => 'required|regex:/^[a-zA-Z]+$/u',
            'preferences' => 'required',
            'bio' => 'required',
            'distance' => 'required|regex:/^[0-9]+$/u|max:5',
            'marital_status' => 'required|regex:/^[a-zA-Z]+$/u',
            'lifestyle' => 'required|regex:/^[a-zA-Z]+$/u',
            'body_structure' => 'required|regex:/^[a-zA-Z ]+$/u',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'model';
        $user->password = bcrypt('123456');
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
			$modelmeta->user_id = $user->id;
			$modelmeta->save();
			
            $url=url('login');
            $to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
            ];
            $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));
            return redirect(url('login'))->with('message', 'Model Inserted. Please check email for password');
        }
    }

    public function customerdata(Request $request){

         
        session()->put('modeldata', '0');
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email',
            'phone' => 'required|regex:/^[0-9]+$/u|max:15',
            'street_address' => 'required',
            'city' => 'required|regex:/^[a-zA-Z]+$/u',
            'state' => 'required|regex:/^[a-zA-Z]+$/u',
            'zip' => 'required|regex:/^[0-9]+$/u|max:10',
            'sex' => 'required|regex:/^[a-zA-Z ]+$/u',
            'preferences' => 'required',
            'interests' => 'required|regex:/^[a-zA-Z]+$/u',
            'distance' => 'required|regex:/^[0-9]+$/u|max:5',
            'marital_status' => 'required|regex:/^[a-zA-Z]+$/u',
            'lifestyle' => 'required'
            
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'customer';
        $user->password = bcrypt('123456');
        $user->save();

        if(!is_null($user)) 
        {
            $usermeta = new UserMeta;
            $usermeta->phone = $request->phone;
            $usermeta->street_address = $request->street_address;
            $usermeta->city = $request->city;
            $usermeta->state = $request->state;
            $usermeta->zip = $request->zip;
            $usermeta->sex = $request->sex;
            $usermeta->preferences = $request->preferences;
            $usermeta->interests = $request->interests;
            $usermeta->distance = $request->distance;
            $usermeta->marital_status = $request->marital_status;
            $usermeta->lifestyle = $request->lifestyle;
			$usermeta->user_id = $user->id;
			$usermeta->save();
			
            $url=url('login');
            $to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
            ];
            $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));
            return redirect(url('login'))->with('message', 'User Inserted. Please check email for password.');
            
        }
    }
}
