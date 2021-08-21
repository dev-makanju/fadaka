@extends('layouts.app')

<!--include header page-->
@section('title' , 'Message')
@section('content')
<section>     
    @include('layouts.sidenav')
    <div id="pages_right" class="column"">
        <div class="pages__main-content">
           <h1 style="color:#000;">Messages and Notifications</h1>
           <div class="message">
               <div class="top-box"></div>
               <div class="message_content">
                    hello makanju this is to inform you that , we are going to need more employment in Nigeria 
                    because of what we need in our company Kindly bear with us if thier is any inconviniences
               </div>
               <div class="message__wrapper">
                   <div class="message__wrapper__content">
                        <a href="#">
                             <i class="fa fa-delete">delete</i>
                        </a>
                        <a href="#">
                            <i class="fa fa-delete">edit</i>
                        </a>
                   </div>
                   <div class="message__wrapper__content">
                        <span>
                             <p> from  Makanju</p>
                        </span>
                   </div>
                </div>
           </div>
        </div>
   </div>
</section> 
@endsection