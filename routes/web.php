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

Route::get('/destroy',"FlightsController@destroy");



Route::get('/DynamicWeb',function (){

    return view('pages.DynamicWeb');
});

Route::view('/Calculator',"pages.Calculator");

Route::get('/HomePage',function (){

    return view('pages.HomePage');
});

Route::get('/DateForm',function (){

    return view('pages.DateForm');
});

Route::get('/Advert',function (){

    return view('pages.Advert');
});

Route::get('/VutshilaAirlines',function (){

    return view('pages.VutshilaAirlines');
});

Route::get('/CheckInForm',function (){

    return view('pages.CheckInForm');
});

Route::get('/MyBookingForm',function (){

    return view('pages.MyBookingForm');
});
Route::get('/Flightindx',function (){

    return view('flying.Flightindx');
});

Route::get('/PassengerDetails',function (){

    return view('pages.PassengerDetails');
});

Route::resource('/posts','AirlineController');
Route::resource('/flying','FlightsController');
