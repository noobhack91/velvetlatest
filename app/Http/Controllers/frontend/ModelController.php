<?php

namespace App\Http\Controllers\frontend;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMeta;
use App\Models\Modeles;
use App\Models\Favorite;
use App\Models\UserProfile;
use App\Models\PrivateThing;
use Mail;
use Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ModelController extends Controller
{
    //
    public function index(){

        $models = User::where('role','=','model')->with('modeles')->orderBy('id','desc')->paginate(50);

        return view('pages.models')->with(["models"=>$models]);

    }

    public function search(Request $request){

        $name = $request->get('name');
        $location = $request->get('location');
        $userid = $request->get('userid');
        $preferences = $request->get('preferences');
        $interests = $request->get('interests');
        $lifestyle = $request->get('lifestyle');
        $body_structure = $request->get('body_structure');
        $distance = $request->get('distance');
        // $marital_status = $request->get('marital_status');
        $sex = $request->get('sex');
        $account_type = $request->get('account_type');
        $escort_type = $request->get('escort_type');
        $suburb = $request->get('suburb');


        $where = '';
		if(isset($name) && $name!=''){
            $where .= 'AND users.name like "%'.$name.'%"';

		}

		if(isset($account_type) && $account_type!=''){
            $where .= 'AND user_profiles.account_type like "%'.$account_type.'%"';

		}

		if(isset($account_type) && $account_type!=''){
            $where .= 'AND user_profiles.advertising_category  = "'.$escort_type.'"';

		}

		if(isset($account_type) && $account_type!=''){
            $where .= 'AND user_profiles.account_type  = "'.$account_type.'"';

		}
		if(isset($location) && $location!=''){

            $where .= 'AND models.street_address like "%'.$location.'%"';
		}
        if(isset($userid) && $userid!=''){

            $where .= 'AND users.id = "'.$userid.'"';
		}
		if(isset($preferences) && $preferences!=''){

            $where .= 'AND models.preferences like "%'.$preferences.'%"';
		}
		if(isset($interests) && $interests!=''){

            $where .= 'AND models.bio like "%'.$interests.'%"';
		}
		if(isset($lifestyle) && $lifestyle!=''){

            $where .= 'AND models.lifestyle like "%'.$lifestyle.'%"';
		}
		if(isset($body_structure) && $body_structure!=''){

            $where .= 'AND models.body_structure like "%'.$body_structure.'%"';
		}
		if(isset($distance) && $distance!=''){

            $where .= 'AND models.distance  = "'.$distance.'"';
		}
// 		if(isset($marital_status) && $marital_status!=''){

//             $where .= 'AND models.marital_status  = "'.$marital_status.'"';
// 		}
		if(isset($sex) && $sex!=''){

            $where .= 'AND models.gender  = "'.$sex.'"';
		}
		if(isset($suburb) && $suburb!=''){

            $where .= 'AND models.suburb  = "'.$suburb.'"';
		}

        $result = DB::select("SELECT * from users INNER JOIN models ON users.id=models.user_id INNER JOIN user_profiles ON models.user_id =user_profiles.user_id where users.role='model' $where");

    //   echo "SELECT * from users INNER JOIN models ON users.id=models.user_id INNER JOIN user_profiles ON models.user_id =user_profiles.user_id where users.role='model' And users.deleted_at IS NULL $where";
    //      echo"<pre>";
    //     print_r($result);
    //     echo"</pre>";
    //     die();

        return view('pages.models')->with(["result"=>$result]);

    }

    public function modelsdetail($name){

        //$id=decrypt($id);
        //echo $id;

        $modelsdata = User::where([['name','LIKE',"%{$name}%"],['role','=','model']])->with('UserGallary')->with('modeles')->first();
        $id=$modelsdata->id;
        if(Auth::check())
        {
            $userId = Auth::id();
            $userfavorite=Favorite::where('user_id','=',$userId)->first();

        }
        else{
            $userfavorite=array();
        }
        $privatethings = PrivateThing::where('user_id', '=', $id)->first();
        return view("pages.model-detail")->with(['model'=>$modelsdata,'userfavorite'=>$userfavorite,"privatethings"=>$privatethings]);

    }

    public function contactmail(Request $request){

        $validatedData=$request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'modelemail'=>'required'
        ]);


        $from = $request->email;
        $to = env('ADMIN_EMAIL');
        $modelemail = $request->modelemail;
        $details = [
                'title' => 'Mail from VelvetKlub',
                'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Name: ' .$request->name. '</p><p>Email: ' .$request->email. '</p><p>Phone: ' .$request->phone. '</p><p>Message: ' .$request->message. '</p><p>Thanks</p>'
            ];

        $mail=\Mail::to($modelemail)->send(new \App\Mail\MyTestMail($details));

        return Redirect::back()->with('message','Mail sent');

    }

    public function videocall(Request $request){

        if(Auth::check())
        {
            $id=$request->id;
            $curl = curl_init();
            $url=URL::to('/api/meetings');

            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('topic'=>'Topic chat','agenda'=>'Agenda chat','start_time'=>'2020-10-31T13:00:00'),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response=json_decode($response);
            if(isset($response) && !empty($response))
            {

                if($id!=''){

                    $userdata=User::where('id',$id)->first();
                    $email=$userdata->email;

                    $subject = "Joining Link";
                    // $headers  = "From: " . $from . "\r\n";
                    // $headers .= "Reply-To: " . $from . "\r\n";
                    // $headers .= "MIME-Version: 1.0\r\n";
                    // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    // $message = '<strong>Hello,</strong><p>Please find below details.</p><p>Metting Url: ' .$response->data->join_url. '</p><p>Metting ID: ' .$response->data->id. '</p><p>Metting Password: ' .$response->data->password. '</p>';
                    // mail($email,$subject,$message, $headers);

                    $details = [
                        'title' => 'Mail from VelvetKlub',
                        'body' => '<strong>Hello,</strong><p>Please find below details.</p><p>Metting Url: ' .$response->data->join_url. '</p><p>Metting ID: ' .$response->data->id. '</p><p>Metting Password: ' .$response->data->password. '</p>'
                    ];

                    $mail=\Mail::to($email)->send(new \App\Mail\MyTestMail($details));

                }

                return json_encode(array('message'=>'Please Join',"redirect_url"=>$response->data->join_url,'status'=>'true','code'=>200));
                die();
            }
        }
        else{
                return json_encode(array('message'=>'Please login',"redirect_url"=>url('login'),'status'=>'true','code'=>200));
                die();
        }
        //echo $response;

    }

}
