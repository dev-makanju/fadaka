<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Exceptions\UnknownDatabaseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Wallet;
use App\Models\User;
use Hash;
use Session;


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
            $last_Inserted_Id = $user->id;
            $user_id = DB::table('users')->where('id' , $last_Inserted_Id )->value('id');
            DB::table('Wallets')->insert([
                'users_id' => $user_id,
                'balance' => 50000 
            ]);
            return redirect('/login')->withSuccessMessage('Congratulations, You have been giving NGN 50,000 as registration bonus!');
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
        try{
            return view('/home' , $data );
        }catch(throwable  $e){
            return back()->with('error' , 'Nothing found');
        }
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
