<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\UserAccount;
use App\Models\Favorite;
use App\Models\Modeles;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUserVerifyMail; 


class UserController extends Controller
{
    //
    public function users(){

        $users = User::where('role','=','customer')->paginate(10);
        return view('admin.users.users')->with(["users"=>$users]);
    }
     public function addCustomer(){

        return view('admin.users.create');
     }
     public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email',
            'phone' => 'required|regex:/^[0-9]+$/u|max:15',
            'street_address' => 'required',
            'city' => 'required|regex:/^[a-zA-Z]+$/u',
            'state' => 'required|regex:/^[a-zA-Z]+$/u',
            'zip' => 'required|regex:/^[0-9]+$/u|max:10',
            'sex' => 'required|regex:/^[a-zA-Z]+$/u',
            'preferences' => 'required|regex:/^[a-zA-Z]+$/u',
            'interests' => 'required|regex:/^[a-zA-Z]+$/u',
            'distance' => 'required|regex:/^[0-9]+$/u|max:5',
            'marital_status' => 'required|regex:/^[a-zA-Z]+$/u',
            'lifestyle' => 'required|regex:/^[a-zA-Z]+$/u',
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

// 			$to = $request->email;
//           $from = "ameliacontentwriter@gmail.com";
//             $subject = "Velvet User Login Details";
//             $headers  = "From: " . $from . "\r\n";
//             $headers .= "Reply-To: " . $from . "\r\n";
//             $headers .= "MIME-Version: 1.0\r\n";
//             $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
//             $url=url('login');
//             $message = '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>';
//             mail($to,$subject,$message, $headers);

            $url=url('login');
            $to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
            ];

            $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));
            return redirect(route('users'))->with('message', 'User Inserted. Please check email for password');
        }
     }

     public function edit($id){
        $id = decrypt($id);
        $user = User::where('id',$id)->with('usermeta')->first();

        return view('admin.users.edit')->with(["user"=>$user]);
    }

public function update(Request $request,$id){


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
        'interests' => 'required|regex:/^[a-zA-Z]+$/u',
        'distance' => 'required|regex:/^[0-9]+$/u|max:5',
        'marital_status' => 'required|regex:/^[a-zA-Z]+$/u',
        'lifestyle' => 'required|regex:/^[a-zA-Z]+$/u',


      ]);
    $userid= Auth::id();
    $result=User::where('id',$id)->update(['name' => $request->name,'email' => $request->email]);
    if($result==1)
    {
			$usermeta = UserMeta::where('user_id',$id)->first();

			if($usermeta){
			    $usermeta->sex = $request->sex;
                $usermeta->phone = $request->phone;
                $usermeta->street_address = $request->street_address;
                $usermeta->city = $request->city;
                $usermeta->state = $request->state;
                $usermeta->zip = $request->zip;
                $usermeta->preferences = $request->preferences;
                $usermeta->interests = $request->interests;
                $usermeta->distance = $request->distance;
                $usermeta->marital_status = $request->marital_status;
                $usermeta->lifestyle = $request->lifestyle;
    			$usermeta->save();
			}
			else{
			    $usermeta = new UserMeta;
                $usermeta->sex = $request->sex;
                $usermeta->phone = $request->phone;
                $usermeta->street_address = $request->street_address;
                $usermeta->city = $request->city;
                $usermeta->state = $request->state;
                $usermeta->zip = $request->zip;
                $usermeta->preferences = $request->preferences;
                $usermeta->interests = $request->interests;
                $usermeta->distance = $request->distance;
                $usermeta->marital_status = $request->marital_status;
                $usermeta->lifestyle = $request->lifestyle;
                $usermeta->user_id = $id;
    			$usermeta->save();
			}




        return redirect(route('users'))->with('message', 'User Data Has Been Updated');
    }

}


    public function delete($id)
    {

        $id = decrypt($id);

        $favorite=Favorite::where('user_id', '=', $id);
        $favorite->delete();

        $usermeta=UserMeta::where('user_id', '=', $id);
        $usermeta->delete();

        $modeles=Modeles::where('user_id', '=', $id);
        $modeles->delete();

        $users=User::find($id);
        $users->delete();
        return redirect(route('users'))->with('message', 'User Data Has Been deleted');

    }
}
