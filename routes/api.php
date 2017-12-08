<?php

use Illuminate\Http\Request;

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

    
Route::get('test',function(){
    return "herereer";
});

    
Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');

Route::group(['middleware'=>'jwt.auth', ['except' => ['authenticate']]], function()
{
    Route::get('users', function(){
         $data = \App\User::take(5)->get();
         return response()->json($data);
    });
});