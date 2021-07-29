<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Exceptions\UnknownDatabaseException;
use Illuminate\Http\Request;
use App\Models\User;
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
        $request->validate([
            'email'=>'required|email|unique:users|max:255',
            'username'=>'required|max:255',
            'password'=>'required|min:8|max:12|confirmed',
            'password_confirmation'=>'required'
        ]);   
        
        $user = new User;
        $user->email =  $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        if($save){
            return redirect('/login')->withSuccessMessage('Congratulations, account has been created');
        }else{
            return back()->with('fail', 'Oops!!! , Something went wrong , try again');
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
            if(Hash::check($request->password , $userInfo->password)){
                   $request->session()->put('LoggedUser' , $userInfo->id);
                   return redirect('/home');
            }else{
                return back()->with('fail' , 'Invalid Credentials');
            }
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('/home' , $data);
    }
    function profile(){
        $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('/profile' , $data);
    }
    function mail(){
        $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('/mail' , $data);
    }
    function message(){
        $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('/message' , $data);
    }
    function fund(){
        
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
}
