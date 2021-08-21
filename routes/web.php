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





