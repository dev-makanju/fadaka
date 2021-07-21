<?php

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\Auth\RegisterController;

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

/***
 * Pages redirect 
 ***/

Route::get('/', function (){
    return view('welcome');
});

Route::get('/contact', function (){
    return view('pages.contact');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/faq', function (){
    return view('pages.faq');
});

Route::get('/home', function (){
    return view('home');
});


Route::get('register' , 'App\Http\Controllers\Auth\RegisterController@register')->name('Auth.register');
Route::get('login' , 'App\Http\Controllers\Auth\RegisterController@Login')->name('Auth.login');
Route::post('log-user' , 'App\Http\Controllers\Auth\RegisterController@log_user')->name('Auth.logged');
Route::post('save' , 'App\Http\Controllers\Auth\RegisterController@save')->name('save.user');
