<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    
    public function showLogin()
    {
         return('pages.login');
    }

    public function showRegister()
    {
         return('pages.register');
    }

}
