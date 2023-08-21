<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agency;
use App\Models\UserVerify;
use App\Models\UserProfile;
class AgencyController extends Controller
{
    //
    public function index(){

        $users = User::where('role','=','agency')->paginate(10);
        return view('admin.agency.agencies')->with(["users"=>$users]);

    }

    public function addAgency(){
        return view('admin.agency.create');
    }

    public function createagency(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email',
            'profile_photo' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = 'agency';
        $user->password = bcrypt('123456');
        $user->save();
        
        $agency = new Agency;
        if($request->hasfile('profile_photo'))
        {
            $file=$request->file('profile_photo');
            $filename_original=$file->getClientOriginalName();
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path().'/images/', $name); 
            $agency->image_name=$name ? $name:'';
            $agency->image_path=public_path().'/images/';  
            $agency->user_id=$user->id;  
        }

        $agency->save();
        if(!is_null($user)) 
        {
            $url=url('login');
            $to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Password: 123456</p><p>Url: ' .$url. '</p><p>Thanks</p>'
            ];
   
            $mail=\Mail::to($to)->send(new \App\Mail\MyTestMail($details));
            return redirect(route('admin.agency'))->with('message', 'Agency Inserted');
        }
    }

    public function edit($id){
        $id = decrypt($id);
        $user = User::where('id',$id)->with('UserAgency')->first();
        
        return view('admin.agency.edit')->with(["user"=>$user]);
    }

    public function update(Request $request,$id){

        $id = decrypt($id);
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|unique:users,email,'.$id,
          ]);
    
        $result=User::where('id',$id)->update(['name' => $request->name,'email' => $request->email]);
        if($result==1)
        {   
            if($request->hasfile('profile_photo'))
            {
                $file=$request->file('profile_photo');
                //print_r($file);
                //die();
                $filename_original=$file->getClientOriginalName();
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/images/', $name);    
                $result=Agency::where('user_id',$id)->update([
                    'image_name' => $name ? $name:'',
                    'image_path' => public_path().'/images/',
                ]);
            }
            return redirect(route('admin.agency'))->with('message', 'Agency data Has Been Updated');
        }
    }

    public function delete($id)
    {
        $id = decrypt($id);
        
        $userprofile=UserProfile::where('user_id', '=', $id);  
        $userprofile->delete(); 
        
        $agency=Agency::where('user_id', '=', $id);  
        $agency->delete();
        
        $users=User::find($id);  
        $users->delete();
        
        return redirect(route('admin.agency'))->with('message', 'Agency Data Has Been deleted');  
    }

}
