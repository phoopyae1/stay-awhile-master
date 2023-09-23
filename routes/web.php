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

Route::get('/','RentalController@home');

Route::post('/login','Auth\LoginController@login');

Route::post('/regformvalidate1','Auth\RegisterController@formvalidator1');

Route::get('/aproperty-register',function(){
  return view('property-register');
});

Route::resource('/property','PropertyController');

Route::resource('/notification','NotificationController');

Route::get('/properties',function(){
    return view('properties');
});

Route::get('/hosts',function(){
    return view('hosts');
});


Route::get('/near-me',function(){
    return view('nearme');
});


Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('properties-single',function(){
    return view('properties-single');
});

Route::get('/register1',function(){
    return view('register1');
});

Route::get('/register2',function(){
    return view('register2');
});

Route::get('/host-detail',function(){
    return view('host-detail');
});

Route::get('/profile', function(){
    return view('profile');
});
