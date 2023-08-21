<?php

use Illuminate\Support\Facades\Route;

/* Admin Controllers*/
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ModelsController;
use App\Http\Controllers\admin\BlogsController;
use App\Http\Controllers\admin\AgencyController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\BotManController;

/* Client Controllers*/
use App\Http\Controllers\client\ClientDashboardController;
use App\Http\Controllers\client\ProfileController;

/* Model Controllers*/

use App\Http\Controllers\model\ModelDashboardController;
use App\Http\Controllers\model\ModelProfileController;

/* Agency Controller */

use App\Http\Controllers\agency\AgencyDashboardController;
use App\Http\Controllers\agency\AgencyProfileController;
use App\Http\Controllers\agency\AgencyModelController;
/* Frontend controoller */
use App\Http\Controllers\frontend\SignupController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\FrontHomeController;
use App\Http\Controllers\frontend\ModelController;
use App\Http\Controllers\frontend\FavoriteController;
use App\Http\Controllers\frontend\FrontAgencyController;
use App\Http\Controllers\PlanController;

use App\Models\Page;

//use Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 Route::get('/mail',function(){
       Mail::raw('Hello World!', function($msg) {$msg->to('dev.lovnish@gmail.com')->subject('Test Email'); });

});



    
//Route::auth();
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
//Route::get('/botman/tinker',[BotManController::class, 'tinker']);
//$botman = resolve('botman');

//$botman->hears('.*(Hi|Hello).*', BotManController::class.'@startConversation');
    //Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);
    Route::get('/enter',function(){
        return view('pages.enter');
    });
    Route::post('/enter',function(){
        setcookie('isAdult', true, time() + (86400 * 30), "/"); // 86400 = 1 day
       return redirect('/');
    });
    Route::get('/term-and-conditions', function () { return view('pages.terms'); })->name('pages.terms');
    
    Route::middleware(['IsAdult'])->group(function () {

            $pages = Page::get();
            foreach($pages as $page){
               //echo $page->location;
               
                Route::get($page->location,[App\Http\Controllers\HomeController::class, 'location']);
            }
            //die();
            Route::post('contact/mail',[App\Http\Controllers\HomeController::class, 'contactmail'])->name('contact.mail');
            
            Route::post('videocall',[ModelController::class, 'videocall'])->name('videocall.call');   
            Route::post('favorite',[FavoriteController::class,'favorite'])->name('favorite');
            
            
	  
            Route::post('save',[SignupController::class,'store'])->name('frontend.signup');
            Route::post('customerdata',[SignupController::class,'customerdata'])->name('frontend.signup');
            Route::get('/blog',[BlogController::class,'index'])->name('pages.blog');
         	Route::get('/blog/{title}', [BlogController::class, 'show'])->name('blog.show');
            Route::get('search',[ModelController::class,'search'])->name('search');
            Route::get('home/search',[FrontHomeController::class,'index'])->name('searchhome');
            Route::get('/',[FrontHomeController::class, 'index'])->name('homepage');
            Route::get('/models', [ModelController::class, 'index'])->name('pages.models');
            Route::get('/models-detail/{name}', [ModelController::class, 'modelsdetail'])->name('pages.models-detail');
            Route::post('model/contactmail', [ModelController::class, 'contactmail'])->name('pages.contactmail');
            Route::get('/appointment', function () { return view('pages.appointment'); })->name('pages.appointment');
            Route::get('/agencies', [FrontAgencyController::class,'index'])->name('pages.agencies');
            Route::get('/agency-detail/{id}', [FrontAgencyController::class,'detail'])->name('pages.agencies.detail');
            Route::get('/contact', function () { return view('pages.contact'); })->name('pages.contact');
            Route::get('/about-us', function () { return view('pages.about_us'); })->name('pages.about');
            Route::get('/help', function () { return view('pages.help'); })->name('pages.help');
	    Route::get('/location', function () { return view('pages.location'); })->name('pages.location');
            Route::get('/plans', function () { return view('pages.plans'); })->name('pages.plans');
	                Route::get('/dmca', function () { return view('pages.DMCA-Notices'); })->name('pages.DMCA-Notice');
	            Route::get('/replacement', function () { return view('pages.replacement_or_refund_policy'); })->name('pages.replacement_or_refund_policy');
	                        Route::get('/popular-locations', function () { return view('pages.popular-locations'); })->name('pages.popular-locations');
		            Route::get('/sitemap', function () { return view('pages.sitemap'); })->name('pages.sitemap');
            Route::get('/privacy-and-policy', function () { return view('pages.privacy_and_policy'); })->name('pages.privacy');
           // Route::get('/signup', function () { return view('pages.signupNew'); })->name('signup');
            Route::get('/signup', [App\Http\Controllers\HomeController::class,'signupForm'])->name('signup');
			
			/**** Ajax *************/
			Route::get('/ajax/getStates', [App\Http\Controllers\HomeController::class,'getStates'])->name('getStates');
			
			
			/*********************/
            Route::post('signup',[App\Http\Controllers\HomeController::class,'signup'])->name('frontend.signup');
            Auth::routes();
            Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
			
			Route::get('account/verify/{token}', [App\Http\Controllers\HomeController::class, 'verifyAccount'])->name('user.verify'); 
        
            // dashboard
            Route::middleware(['isAdmin','auth'])->prefix('admin')->group(function () {
            Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');
            
            Route::get('profile/{id}', [AdminProfileController::class, 'edit'])->name('adminprofile.edit');
            Route::put('profile/update/{id}', [AdminProfileController::class, 'update'])->name('adminprofile.update');
            Route::get('profile/updatepassword/{id}', [AdminProfileController::class, 'psswordupdate'])->name('adminprofile.psswordupdate');
            Route::put('profile/updatepassword/{id}', [AdminProfileController::class, 'psswordupdated'])->name('adminprofile.psswordupdated');
        
            /*Customers by Admin*/
        
            Route::get('users',[UserController::class,'users'])->name('users');
            Route::get('addcustomer',[UserController::class,'addCustomer'])->name('admin.addCustomer');
            Route::post('create',[UserController::class,'store'])->name('admin.addeduser');
            Route::delete('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
            Route::put('user/update/{id}', [UserController::class, 'update'])->name('user.update');
            Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        
            /*Models by Admin*/
        
            Route::get('models',[ModelsController::class,'models'])->name('models');
            Route::get('addmodel',[ModelsController::class,'addModel'])->name('admin.addModel');
            Route::post('createmodel',[ModelsController::class,'store'])->name('admin.addedModel');
            Route::delete('model/delete/{id}', [ModelsController::class, 'delete'])->name('model.delete');
            Route::put('model/update/{id}', [ModelsController::class, 'update'])->name('model.update');
            Route::get('model/edit/{id}', [ModelsController::class, 'edit'])->name('model.edit');
            Route::get('model/galary/delete/{id}',[ModelsController::class, 'GallayDelete'])->name('model.gallarydelete');
             Route::get('modelVerification',[ModelsController::class,'modelverification'])->name('admin.modelVerification');
            Route::get('model/verificationEdit/{id}', [ModelsController::class, 'verificationedit'])->name('model.verificationedit');
            Route::post('model/verificationupdate/{id}', [ModelsController::class, 'verificationupdate'])->name('model.verificationupdate');
            
            /* Blogs Create By admin*/
            Route::get('blogs',[BlogsController::class,'blogs'])->name('admin.blogs');
            Route::get('addblog',[BlogsController::class,'addBlog'])->name('admin.addBlog');
            Route::post('createblog',[BlogsController::class,'store'])->name('admin.addedBlog');
            Route::put('blog/update/{id}', [BlogsController::class, 'update'])->name('blog.update');
            Route::get('blog/edit/{id}', [BlogsController::class, 'edit'])->name('blog.edit');
            Route::delete('blog/delete/{id}',[BlogsController::class, 'BlogDelete'])->name('model.BlogDelete');

            /* Agency Create By admin*/
            Route::get('agencies',[AgencyController::class,'index'])->name('admin.agency');
            Route::get('addagency',[AgencyController::class,'addAgency'])->name('admin.addAgency');
            Route::post('createagency',[AgencyController::class,'createagency'])->name('admin.addedagency');
            Route::put('agency/update/{id}', [AgencyController::class, 'update'])->name('agency.update');
            Route::get('agency/edit/{id}', [AgencyController::class, 'edit'])->name('agency.edit');
            Route::delete('agency/delete/{id}',[AgencyController::class, 'delete'])->name('agency.delete');

            /* Pages Create By admin*/

            Route::get('pages',[PagesController::class,'index'])->name('admin.page');
            Route::get('addpage',[PagesController::class,'addPage'])->name('admin.addPage');
            Route::post('createpage',[PagesController::class,'createpage'])->name('admin.addedpage');
            Route::put('page/update/{id}', [PagesController::class, 'update'])->name('page.update');
            Route::get('page/edit/{id}', [PagesController::class, 'edit'])->name('page.edit');
            Route::delete('page/delete/{id}',[PagesController::class, 'delete'])->name('page.delete');
        });
        
        Route::middleware(['IsClient','auth'])->prefix('customer')->group(function () {
           
            Route::get('/',[ClientDashboardController::class,'index'])->name('customer');
            Route::get('profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::put('profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
            Route::get('profile/updatepassword/{id}', [ProfileController::class, 'psswordupdate'])->name('profile.psswordupdate');
            Route::put('profile/updatepassword/{id}', [ProfileController::class, 'psswordupdated'])->name('profile.psswordupdated');
        });
        
        Route::middleware(['IsModel','auth'])->prefix('model')->group(function () {
           
            Route::get('/',[ModelDashboardController::class,'index'])->name('model');
            Route::get('complete-profile',[ModelDashboardController::class,'completeProfile'])->name('model.comepleteprofile');
            Route::post('complete-profile',[ModelDashboardController::class,'saveCompleteProfile'])->name('model.comepleteprofile');
            Route::post('createmodel',[ModelDashboardController::class,'createModel'])->name('model.createModel');

            Route::get('profile_details/{id}', [ModelProfileController::class, 'profile_details'])->name('model.profile_details');
            Route::get('profile/{id}', [ModelProfileController::class, 'edit'])->name('model.profile.edit');
            Route::put('profile_detail/update/{id}', [ModelProfileController::class, 'profile_detail_update'])->name('model.profile.profile_detail_update');
            Route::get('profile_text/update/{id}', [ModelProfileController::class, 'profile_text_update'])->name('model.profile.profile_text_update');
            Route::put('profile_text/update/{id}', [ModelProfileController::class, 'profile_text_put'])->name('model.profile.profile_detail_put');
            Route::get('photos/update/{id}', [ModelProfileController::class, 'photos'])->name('model.profile.photos');
            Route::get('base_location/update/{id}', [ModelProfileController::class, 'base_location'])->name('model.profile.base_location');
            Route::put('base_location/update/{id}', [ModelProfileController::class, 'base_location_update'])->name('model.profile.base_location_update');
            Route::get('avaliablity/{id}', [ModelProfileController::class, 'avaliablity'])->name('model.profile.avaliablity');
            Route::put('avaliablity/update/{id}', [ModelProfileController::class, 'avaliablityupdate'])->name('model.profile.avaliablityupdate');
            Route::get('verification/{id}', [ModelProfileController::class, 'verification'])->name('model.profile.verification');
            

            Route::post('selfie',[ModelProfileController::class,'selfie'])->name('selfie');
            Route::put('profile/photos_update/{id}', [ModelProfileController::class, 'photos_update'])->name('model.profile.photos_update');
            Route::put('profile/update/{id}', [ModelProfileController::class, 'update'])->name('model.profile.update');
            Route::get('profile/updatepassword/{id}', [ModelProfileController::class, 'psswordupdate'])->name('model.profile.psswordupdate');
            Route::put('profile/updatepassword/{id}', [ModelProfileController::class, 'psswordupdated'])->name('model.profile.psswordupdated');
            Route::get('galary/delete/{id}',[ModelProfileController::class, 'GallayDelete'])->name('profilemodel.gallarydelete');
            
        });

        Route::middleware(['IsAgency','auth'])->prefix('agency')->group(function () {
           
            Route::get('/',[AgencyDashboardController::class,'index'])->name('agency');
            Route::get('profile/{id}', [AgencyProfileController::class, 'edit'])->name('agency.profile.edit');
            Route::put('profile/update/{id}', [AgencyProfileController::class, 'update'])->name('agency.profile.update');
            Route::get('profile/updatepassword/{id}', [AgencyProfileController::class, 'psswordupdate'])->name('agency.profile.psswordupdate');
            Route::put('profile/updatepassword/{id}', [AgencyProfileController::class, 'psswordupdated'])->name('agency.profile.psswordupdated');
            Route::get('galary/delete/{id}',[AgencyProfileController::class, 'GallayDelete'])->name('profilemodel.gallarydelete');
            Route::get('models',[AgencyModelController::class,'models'])->name('agency.models');
            Route::get('addmodel',[AgencyModelController::class,'addModel'])->name('agency.addModel');
            Route::post('createmodel',[AgencyModelController::class,'store'])->name('agency.addedModel');
            Route::delete('model/delete/{id}', [AgencyModelController::class, 'delete'])->name('agency.delete');
            Route::put('model/update/{id}', [AgencyModelController::class, 'update'])->name('agency.update');
            Route::get('model/edit/{id}', [AgencyModelController::class, 'edit'])->name('agency.edit');
            Route::get('model/galary/delete/{id}',[AgencyModelController::class, 'GallayDelete'])->name('agency.model.gallarydelete');
 
        });
    });

    Route::middleware("auth")->group(function () {
        Route::get('plans', [PlanController::class, 'index']);
        Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
        Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
    });
