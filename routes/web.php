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
    //return view('welcome');

    // if (Auth::check()) {
    //   return "the user is logged in";
    // }

    $email = "russ@gmail.com";
    $password = "password";

    if (Auth::attempt(['email'=>$email, 'password'=>$password])) {
      return redirect()->intended('/admin');
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
