@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title','Home')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
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
                            <a href="#">Sign up</a>
                        </div>
                        <div class="link__landing__page__wrapper">
                            <a href="#">Sign in</a>
                        </div>
                    </div>
               </div>
             </div>
        </div>
     @endsection 
</body>
</html>