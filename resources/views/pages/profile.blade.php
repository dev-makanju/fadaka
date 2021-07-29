@extends('layouts.app')

<!--include header page-->
@section('title' , 'Profile')
@section('content')
<section>     
   @include('layouts.sidenav')
   <div id="pages_right" class="column"">
       <div class="pages__main-content__profile">
          <div class="pages__main-content__profile__split">
               <div class="profile__wrapper">
                   <img src="" alt="pic">     
                   <h1 style="color:#000;">Oluwafemi Makanju</h1>
               </div>
          </div>

          <div class="pages__main-content__profile__split">
               <div>
                    <p>Hello world...</p>
               </div>
               <div>
                   <p>Hello world...</p>
               </div>
               <div>
                   <p>Hello world...</p>
               </div>
          </div>
       </div>
  </div>
</section> 
@endsection