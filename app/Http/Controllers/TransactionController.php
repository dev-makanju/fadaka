<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Payment;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\Auth;

use Paystack;

class TransactionController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
             return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e){
              return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $user_id = session('LoggedUser');
        //$wallet_id = DB::table('Wallet')->where('users_id' , Auth::id() )->value('id');
        try{
            $wallet_id = DB::table('Wallets')->where('users_id' , $user_id )->value('id');
        } catch(Throwable $e){
            //report esception
            report($e);
            return false;
        }
            //dd($paymentDetails);
            $data = Payment::create([
                'wallet_id'=> $wallet_id,
                'user_id'=> $user_id,
                'status'=> $paymentDetails['data']['status'],
                'transaction_id'=> $paymentDetails['data']['id'],
                'amount'=> $paymentDetails['data']['amount']
            ]); 

            if($data){
                 $bal = DB::table('wallets')->where('users_id' , session('LoggedUser'))->value('balance');
                 $result = $bal + $paymentDetails['data']['amount'];
                 //update wallet table
                 $bal = DB::table('wallets')->where('users_id' , session('LoggedUser'))->update(['balance'=>$result]);
                 return redirect('/getfund')->withSuccessMessage('Holla!!! , Transaction Successfully', $paymentDetails['data']['channel'] , 'have been added to your wallet. , Thank you!!!');
            }else{
                 return back()->with('fail' , 'Your transaction was successful, kindly try again later');
            }
        
        
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function updateWallet(){
        $paymentDetails = Paystack::getPaymentData();

    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(transaction $transaction)
    {
        //
        $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('pages.fund' , $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
