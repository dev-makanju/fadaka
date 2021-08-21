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

    public function getTransaction()
    {
     $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
         return view('pages.transaction' , $data);
    }

    public function getHelpPage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
         return view('pages.help' , $data );
    }

    public function getWithdrawPage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
         return view('pages.withdraw' , $data);
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

    public function getTransferPage()
    {
         $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];   
         return view('pages.transfer' , $data);
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
