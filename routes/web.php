<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;

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


Route::get('/contact',function () {

    return view('contact');

});

Route::group(['namespace'=>'Admin'],function(){

    Route::get("adminPage","AdminController@getAdminName");

});

Route::get('welcome','Front\WelcomController@sayWelcom');


Route::get('about' , function() {

    return view('layout\about');

});


Route::get('portfolio',function(){

    return view('layout\portfolio');

});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
