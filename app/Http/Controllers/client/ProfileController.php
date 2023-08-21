<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ProfileController extends Controller
{
    //
    public function edit($id){

        $id = decrypt($id);
        $user = User::where('id',$id)->first();
        return view('client.profile.edit')->with(["user"=>$user]);
    }

    public function update(Request $request,$id){

        $id = decrypt($id);
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|unique:users,email,'.$id,
    		'phone' => 'required|regex:/^[0-9]+$/u|max:15',
    		'street_address' => 'required',
    		'city' => 'required|regex:/^[a-zA-Z]+$/u',
    		'state' => 'required|regex:/^[a-zA-Z]+$/u',
    		'zip' => 'required|regex:/^[0-9]+$/u|max:10',
            'sex' => 'required|regex:/^[a-zA-Z]+$/u',
            'preferences' => 'required|regex:/^[a-zA-Z]+$/u',
            'interests' => 'required',
            'distance' => 'required|regex:/^[0-9]+$/u|max:5',
            'marital_status' => 'required|regex:/^[a-zA-Z]+$/u',
            'lifestyle' => 'required|regex:/^[a-zA-Z]+$/u',
        ]);
        
        $result=User::where('id',$id)->update(['name' => $request->name,'email' => $request->email]);
        if($result==1)
        {
            $usermeta = UserMeta::where('user_id',$id)->first();
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
            return redirect(route('customer'))->with('message', 'Client Profile has Been Updated');
        }
    }

    public function psswordupdate($id){

        $id = decrypt($id);
        $user = User::where('id',$id)->first();
        return view('client.profile.passwordupdate')->with(["user"=>$user]);
    }

    public function psswordupdated(Request $request,$id){

        $id = decrypt($id);
        $validator = $request->validate([
            'newpassword' => 'required',
            'confirmpwd' => 'required|same:newpassword',
        ]);

        
        $newpassword=bcrypt($request->newpassword);
        $result=User::where('id',$id)->update(['password' => $newpassword]);
        if($result==1)
        {
            Session::flush();
            Auth::logout();
            return redirect('/')->with('message', 'Password has Been Updated');
        }

    }
}
