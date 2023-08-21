<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Zoom\MeetingController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('login', [UserController::class, 'login']);
//Route::post('login', 'API\UserController@login');
// Route::post('register', 'Controller');
Route::post('register', [UserController::class, 'register']);
Route::group(['middleware' => 'auth:api'], function(){

    Route::post('details', [UserController::class, 'details']);

});

// Get list of meetings.

Route::get('/meetings', [MeetingController::class, 'list']);


// Create meeting room using topic, agenda, start_time.
Route::post('/meetings', [MeetingController::class, 'create']);



// Get information of the meeting room by ID.
Route::get('/meetings/{id}', [MeetingController::class, 'get'])->where('id', '[0-9]+');
Route::patch('/meetings/{id}', [MeetingController::class, 'update'])->where('id', '[0-9]+');
Route::delete('/meetings/{id}', [MeetingController::class, 'delete'])->where('id', '[0-9]+');