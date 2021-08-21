<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\Auth\RegisterController;



Route::get('/', [pagesController::class, 'getIndexPage']);
Route::get('/contact', [pagesController::class, 'getContactPage'])->name('pages.contact');
Route::get('/faq', [pagesController::class, 'getFaqPage'])->name('pages.faq');
Route::get('/about', [pagesController::class, 'getAboutPage'])->name('pages.about');
Route::get('/register', [RegisterController::class, 'register'])->name('Auth.register');
Route::get('/login', [RegisterController::class, 'login'])->name('Auth.login');
Route::post('/log-user', [RegisterController::class, 'log_user'])->name('Auth.logged');
Route::post('/save-user', [RegisterController::class, 'save'])->name('save.user');
Route::get('/home', [RegisterController::class, 'dashboard'])->name('pages.dashboard');
Route::get('/log-out', [RegisterController::class, 'logout'])->name('auth.logout');

Route::get('/transaction', [pagesController::class, 'getTransaction'])->name('pages.transact');
Route::get('/profile', [pagesController::class, 'getProfilePage'])->name('pages.profile');
Route::get('/fund', [pagesController::class, 'getFundPage'])->name('pages.fund');
Route::get('/transfer', [pagesController::class, 'getTransferPage'])->name('pages.transfer');
Route::get('/mail', [pagesController::class, 'getMailPage'])->name('pages.mail');
Route::get('/help', [pagesController::class, 'getHelpPage'])->name('pages.help');
Route::get('/withdraw', [pagesController::class, 'getWithdrawPage'])->name('pages.withdraw');