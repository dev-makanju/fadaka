@extends('layouts.app')

<!--include header page-->
@section('title' , 'Contact')
@section('content')

<div class="faq">
    <div class="radius-circle-design">
       <div class="radius-circle-design__small">
             <div class="faq__text">
                   <h1>How can we Help you?</h1>
             </div>
       </div>
    </div>
</div>

<div class="main__faq__content">
   <div class="Auth_container">
    <h2>Contact Us</h2>
    <form action="">
           <div class="form-Control">
                <label for="Email">Email:</label>
                <input type="text" name="email" id="Email" placeholder="Fadaka_example@gmail.com">
           </div>
           <div class="form-Control">
               <label for="pass_conf">How can we help you?</label>
               <textarea name="" id="" cols="30" rows="10"></textarea>
           </div>
           <button type="submit" class="btn">Submit</button>
    </form>
   </div>
</div>
     
@endsection