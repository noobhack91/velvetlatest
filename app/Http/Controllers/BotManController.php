<?php
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
  
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
  
        $botman->hears('{message}', function($botman, $message) {
  
            if ($message == 'model' || $message == 'Model') {
                //$this->askName($botman);
                 
                 $botman->reply("Go to Signup Page and Add your full Model Information or Share your all information at - listing@velvetklub.com For more enquiry – support@velvetklub.com");
            }
            elseif($message == 'customer' || $message == 'Customer'){
                //$this->askName($botman);
                $botman->reply("Go to Signup Page or login your account to find the best model.");
                
                
            }
            else{
                $botman->reply("Hello, Welcome to Velvet Klub are you customer or model?");
            }
  
        });
  
        $botman->listen();
    }
  
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
//         $botman->ask('Go to Signup Page or login your account to find the best model. ', function(Answer $answer) {
  
//             $name = $answer->getText();
//             $url=url("/signup");
          
//             $data='We apologize for the inconvenience. Our support team will get back to you within 24-48 hours. For more email us at - support@velvetklub.com
            
//             <a href="#">Customer Signup</a> | <a href="#">Model Signup</a>
// If you want, we can sign up email us your full information on this email id - listing@velvetklub.com

//             ';
  
//             $this->say($data);
//         });
    }
}