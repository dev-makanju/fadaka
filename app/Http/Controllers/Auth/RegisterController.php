<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Exceptions\UnknownDatabaseException;
use Illuminate\Http\Request;
use App\Model\User;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //return register view
    public function register()
    {
        return view('pages.register');
    }
    
    //return login view
    public function login()
    {
        return view('pages.login');
    }
    
    /*
    *Accept request 
    *save input to database
    */
    public function save(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|unique:user|string|max:255|email',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'pass_conf' => 'required'
        ]);

        try {
            $user = new user();
            $user->email = $request->email;
            $user->$username = $request->username;
            $user->password = Hash::make($request->password);
            $save = $user->save();
            if ($save) {
                return back()->with('success', 'successfully created an account');
            } else {
                return back()->with('fail', 'Oops!!! , Something went wrong , try again');
            }
        }catch(UnknownDatabaseException $exception) {
            report($exception);
            return back()->withError($exception->getMessage())->withInput();
        }
    }   

    //logg user into database
    public function log_user(Request $request)
    {
        $validation = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]); 

        $userInfo = User::where('email','=',$request->email)->first();
        if(!$userInfo)
        {
            return back()->with('fail','We do not recorgnise your email address');
        }else{
            //check for password
            if(Mash::check($request-passwrod , $userInfo->password)){
                   $request->session()->put('LoggedUser' , $userInfo->id);
                   return redirect('/home');
            }else{
                return back()->with('fail' , 'Invalid Credentials');
            }
        }

    }
}
