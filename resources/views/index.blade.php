@extends('layouts.app')
@section('title' , 'Home')
@section('content')
        <div class="container">
            <div class="container__background">
                <ul class="box-area">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="container__wrapper__content">
               <div class="landing__page">
                   <h2>Fadaka</h2>
                   <h4>Your Personal Finance App</h4>
                   <h6>easy banking...</h6>
               </div>

               <div class="landing__page">
                    <div class="link__landing__page">
                        <div class="link__landing__page__wrapper">
                            <a href="{{ route('Auth.register') }}">Sign up</a>
                        </div>
                        <div class="link__landing__page__wrapper">
                            <a href="{{ route('Auth.login') }}">Sign in</a>
                        </div>
                    </div>
               </div>
             </div>
        </div>
@endsection 