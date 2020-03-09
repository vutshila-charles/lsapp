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
    //return "This is charles";
});

Route::get('/Hello', function () {
    //return view('welcome');
    return "<h1>This is charles<h1>";
});

Route::get('/about',function (){

    return view('pages.about');
});

Route::view('/UserRegistration',"pages.UserRegistration");
Route::view('/UserLogin',"pages.UserLogin");
Route::post('/registerr',"CredentialsController@registerr");
Route::post('/login',"CredentialsController@login");

Route::get('/DynamicWeb',function (){

    return view('pages.DynamicWeb');
});

Route::get('/Calculator',function (){

    return view('pages.Calculator');
});