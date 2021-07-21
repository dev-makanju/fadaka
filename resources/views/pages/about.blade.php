@extends('layouts.app')

<!--include header page-->
@section('title' , 'About')

@section('content')

<div class="about-us__page">
    <div class="about-us__picture">
         <img class="background" src="{{ asset('media/IMG.PIC.JPG') }}" alt="">
         <div class="overlay"></div>
         <div class="about-us__overlay">
             <h1>The most transparent and security banking</h1>
         </div>
    </div>
</div>
<div class="about-us__center">
    <h2>There is just the two of us</h2>
    <div class="wrapper__center">
        <div class="about-us__center__image">
            <img src="https://www.freepik.com/free-vector/usability-testing-concept-illustration_7230624.htm#page=1&query=Illustrations&position=33" alt="images">
            <h2>Security</h2>
            <p>We are one of the best when it comes to cashless transfer, 
                Your banking details are secure.. 
            </p>
       </div>
       <div class="about-us__center__image">
            <img src="https://pixabay.com/photos/money-profit-finance-business-2696228/" alt="">
            <img src="https://www.freepik.com/free-vector/qr-code-concept-illustration_13717654.htm?query=Illustrations" width="300" alt="images">
            <h2>Easy banking</h2>
            <p> Pear to pear transfer is what drives our growth , and we are proud 
                to be contributing to Africa tech solution.
            </p>
       </div>
    </div>
</div>
<div class="about-us__picture">
    <div class="overlay"></div>
    <div class="about-us__overlay">
        <h1>The most transparent and security banking</h1>
    </div>
</div>

@endsection