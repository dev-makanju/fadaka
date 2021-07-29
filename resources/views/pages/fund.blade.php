@extends('layouts.app')
<!--include header page-->
@section('title' , 'fund-wallet')
@section('content')
<section>     
    @include('layouts.sidenav')
    <div id="pages_right" class="column"">
        <div class="pages__main-content">
           <h1 style="color:#000;">Fund wallet</h1>
           <div class="message">
               <div class="top-box"></div>
               <div class="message_content">
                   <form action="" method="">   
                       @csrf    
                       <div class="form-group">
                            <input type="text" placeholder="1234 1234 1234 1234"> 
                            <div class="error">
                                  input feild is required
                            </div>
                       </div>
                       <div class="form-group">
                           <div class="split__form">
                                <input type="text" placeholder="04/03"> 
                                <input type="" placeholder="cvv">
                           </div>
                           <div class="error">
                                input feild is required
                            </div>
                       </div>
                       <div class="form-group">
                            <input type="text" placeholder="$2000"> 
                            <div class="error">
                                input feild is required
                            </div>
                       </div>
                       <button class="btn">send</button>
                   </form>
               </div>
               <div class="message__wrapper">
                   <h2>Add card details</h2>
                </div>
           </div>
        </div>
   </div>
</section> 

@endsection