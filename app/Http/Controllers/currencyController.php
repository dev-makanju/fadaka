<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use AmrShawky\LaravelCurrency\Facade\Currency;


class currencyController extends Controller
{
    //
    public function convertCurrency(){
        $currency = Currency::convert()
                ->from('USD')
                ->to('NGN')
                ->amount(100)
                ->get();
    }

}
