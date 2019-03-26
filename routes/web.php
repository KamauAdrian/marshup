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
    return view('layouts.master');
});

Auth::routes();

Route::get('/send/email','HomeController@email')->name('sendMail');

Route::get('/home', 'HomeController@index')->name('home');



//posts
Route::get('/posts/all','PostsController@index')->name('all');//view all posts
Route::get('/posts/create','PostsController@create')->name('create');//create posts page
Route::post('/posts/create','PostsController@stote')->name('save');//create and save a post


//all Users
Route::get('/admin/users','HomeController@all');





//social auth with twitter
//Route::get('auth/{provider}/callback', 'GoogleAuthController@callback');
//Route::get('auth/redirect/{provider}', 'GoogleAuthController@redirect');

//social auth with google
Route::get('auth/redirect/google','GoogleAuthController@redirectToProvider');
Route::get('auth/google/callback', 'GoogleAuthController@handleProviderCallback');

//social auth with facebook
Route::get('auth/redirect/facebook','FacebookAuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'FacebookAuthController@handleProviderCallback');

//social auth with twitter
Route::get('auth/redirect/twitter','TwitterAuthController@redirectToProvider');
Route::get('auth/facebook/twitter', 'TwitterAuthController@handleProviderCallback');

//social auth with github
Route::get('auth/redirect/github','GithubAuthController@redirectToProvider');
Route::get('auth/github/callback', 'GithubAuthController@handleProviderCallback');
