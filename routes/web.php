<?php

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

Route::get('/Contact' , 'App\Http\Controllers\PagesController@getContactPage')->name('pages.contact');
Route::get('/About' , 'App\Http\Controllers\PagesController@getAboutPage')->name('pages.about');
Route::get('/Faq' , 'App\Http\Controllers\PagesController@getFaqPage')->name('pages.faq');
Route::get('/' , 'App\Http\Controllers\PagesController@getIndexPage');

Route::post('log-user' , 'App\Http\Controllers\Auth\RegisterController@log_user')->name('Auth.logged');
Route::post('save' , 'App\Http\Controllers\Auth\RegisterController@save')->name('save.user');
Route::get('logout' , 'App\Http\Controllers\Auth\RegisterController@logout')->name('auth.logout');

Route::group(['middleware'=>['Authcheck']] , function(){
    Route::get('/register' , 'App\Http\Controllers\Auth\RegisterController@register')->name('Auth.register');
    Route::get('/login' , 'App\Http\Controllers\Auth\RegisterController@Login')->name('Auth.login');
    Route::get('/home','App\Http\Controllers\Auth\RegisterController@dashboard')->name('pages.dashboard');

    Route::get('/mail' , 'App\Http\Controllers\PagesController@getMailPage')->name('pages.mail');
    Route::get('/message' , 'App\Http\Controllers\PagesController@getMessagePage')->name('pages.message');
    Route::get('/profile' , 'App\Http\Controllers\PagesController@getProfilePage')->name('pages.profile');
    Route::get('/fund-wallet' , 'App\Http\Controllers\PagesController@getFundPage')->name('pages.fund');
});

