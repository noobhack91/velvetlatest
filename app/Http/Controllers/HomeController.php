<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Page;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Modeles;
use App\Models\Country;
use App\Models\State;
use App\Models\UserVerify;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

	public function signupForm(){
		$countries = Country::get();
        $pages = Page::orderBy('page_name')->get();

		return view('pages.signupNew')->with(['countries'=>$countries,'pages'=>$pages]);
	}
	public function getStates(Request $req){
		$country = $req->country;
		$data =  array();
		$states = State::where('country_id',$country)->get();

		$data['states'] = $states;
		echo json_encode($data);
		exit;
	}
    public function contactmail(Request $request){


        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        //$to = $request->email;
        $from = env('ADMIN_EMAIL');
        // $subject = "Velvet Login Details";
        // $headers  = "From: " . $from . "\r\n";
        // $headers .= "Reply-To: " . $from . "\r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        // $url=url('login');
        // $message = '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Phone: ' .$request->phone. '</p><p>Message: ' .$request->message. '</p><p>Thanks</p>';
        // mail($to,$subject,$message, $headers);
        $url=url('login');

        //$to = $request->email;
            $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Phone: ' .$request->phone. '</p><p>Message: ' .$request->message. '</p>'
            ];

            $mail=\Mail::to($from)->send(new \App\Mail\MyTestMail($details));

        return redirect(url('/'))->with('message', 'Contact Mail Sent!.');

    }

    public function location(Request $request){

        $location = Request()->segment(1);

        $pages = Page::where('location','=', $location)->first();
        $search=$pages->page_name;

        $where = '';
        if(isset($search) && $search!=''){

            $where .= 'AND models.street_address like "%'.$search.'%"';
		}
        $result = DB::select("SELECT * from users INNER JOIN models
        ON users.id = models.user_id where users.role='model' And users.deleted_at IS NULL $where");





        return view('pages.location')->with(["result"=>$result,"pages"=>$pages]);
        //return view('location');
    }
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();

        $message = 'Sorry your email cannot be identified.';

        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;

            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

      return redirect()->route('login')->with('message', $message);
    }

}
