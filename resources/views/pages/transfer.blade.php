@extends('layouts.app')
<!--include header page-->
@section('title' , 'fund-wallet')
@section('content')
<section>     
    @include('layouts.sidenav')
    <div id="pages_right" class="column"">
        <div class="pages__main-content">
           <div class="error_message">
               Transaction Failed
           </div>
           
        </div>
   </div>

</section> 

@endsection