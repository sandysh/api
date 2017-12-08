<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get-users', 'HomeController@getUsers')->name('users.all');
Route::get('/get-individuals', 'HomeController@getIndividuals')->name('individuals.all');
Route::get('/search-users/{text}', 'HomeController@searchUsers')->name('users.search');
Route::get('/search-individuals/{text}', 'HomeController@searchIndividuals')->name('individuals.search');

Route::get('/get-posts','PostController@getPosts')->name('datatables.posts');
Route::resource('/post','PostController');

// Route::resource('/check', 'CheckController');

Route::get('check', function(){
    return "check successful";
});
