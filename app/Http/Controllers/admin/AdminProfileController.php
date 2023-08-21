<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminProfileController extends Controller
{
    //
    public function edit($id){

        $id = decrypt($id);
        $user = User::where('id',$id)->first();
        return view('admin.profile.edit')->with(["user"=>$user]);
    }

    public function update(Request $request,$id){

        $id = decrypt($id);
      
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
        ]);
        
      
        
        $result=User::where('id',$id)->update(['name' => $request->name,'email' => $request->email]);
        if($result==1)
        {
            return redirect(route('users'))->with('message', 'Admin Profile has Been Updated');
        }
    }

    public function psswordupdate($id){

        $id = decrypt($id);
        $user = User::where('id',$id)->first();
        return view('admin.profile.passwordupdate')->with(["user"=>$user]);
    }

    public function psswordupdated(Request $request,$id){

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
            return redirect('/')->with('message', 'Password has Been Updated');
        }

    }
}
