<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class pagesController extends Controller
{

    public function getContactPage()
    {
         return view('pages.contact');
    }

    public function getFaqPage()
    {
         return view('pages.faq');
    }

    public function getAboutPage()
    {
         return view('pages.about');
    }

    public function getIndexPage()
    {
         return view('/index');
    }

    public function getMailPage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];   
         return view('pages.mail' , $data);
    }

    public function getMessagePage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
         return view('pages.message' , $data);
    }
    
    public function getProfilePage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
         return view('pages.profile' , $data);
    }
    
    public function getFundPage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
         return view('pages.fund' , $data);
    }     
    

}
