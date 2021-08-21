
@extends('layouts.app')

<!--include header page-->
@section('title' , 'Home')

@section('content')

<div class="about-us__page">
    <div class="about-us__picture">
         <img src="/media/wallet.jpg" alt="home-pic">
         <div class="overlay"></div>
         <div class="about-us__overlay">
             <h1>The most transparent and secured banking</h1>
         </div>
    </div>
</div>

<div class="container">
    <!--include the container about sectioon -->
    <div class="about-us__center">
        <h2>There is just the two of us</h2>
        <div class="wrapper__center">
            <div class="about-us__center__image">
                <img width="300" src="media/Online payment_isometric.svg" alt="images">
                <h2>Security</h2>
                <p>We are one of the best when it comes to cashless transfer, 
                    Your banking details are secure.. 
                </p>
           </div>
           <div class="about-us__center__image">
                <img src="media/Online payment_Two Color.svg" width="300" alt="images">
                <h2>Easy banking</h2>
                <p> Pear to pear transfer is what drives our growth , and we are proud 
                    to be contributing to Africa tech solution.
                </p>
           </div>
        </div>
    </div>

    <div class="container__background">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!---third section of the landing page--->
    <!--Customers Testimonies!-->
    <div class="Testimony">
        <h1 class="core-features">Our core features</h1>
        <div class="wrapper__center">
            <div class="about-us__center__image">
                <div class="rev-font">
                    <div class="font">
                        <span style="font-size: 78px;" class="material-icons">contactless</span>

                    </div>
                </div>
                 <h2 class="ptop">Pear to pear transaction</h2>
                 <p> Pear to pear transfer is what drives our growth , and we are proud 
                      to be contributing to Africa tech solution.
                 </p> 
           </div>
           <div class="about-us__center__image">
            <div class="rev-font">
                <div class="font">
                    <span style="font-size: 78px;" class="material-icons md-48">
                        credit_card
                        </span>
                </div>
            </div>
             <h2  class="ptop">Airtime Topup</h2>
             <p> Pear to pear transfer is what drives our growth , and we are proud 
                  to be contributing to Africa tech solution.
             </p>
           </div>
           <div class="about-us__center__image">
                <div class="rev-font">
                     <div class="font">
                        <span style="font-size: 78px;" class="material-icons md-48">
                            account_balance
                            </span>
                    </div>
                </div>
                 <h2 class="ptop">Easy banking</h2>
                 <p> Pear to pear transfer is what drives our growth , and we are proud 
                      to be contributing to Africa tech solution.
                 </p>
           </div>
        </div>
    </div>
    <!--footer part for landing page and other related pages-->
    @include('includes.footer')
</div>

@endsection