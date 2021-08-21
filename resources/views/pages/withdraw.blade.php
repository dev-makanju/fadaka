@extends('layouts.app')

<!--include header page-->
@section('title' , 'withdraw');
@section('content')
<section>     
    @include('layouts.sidenav')
    <div id="pages_right" class="column"">
        <div class="pages__main-content">
               <div class="error_message">
                   <p>Transaction Failed<p/>
               </div>
               <div class="message">
                   <div class="top-box"></div>
                   <div class="messge_content">
                       <form method="POST" action="{{ route('pay') }}"  accept-charset="UTF-8" class="form-horizontal" role="form">   
                           <div class="form-group">
                                <input type="" name="email" placeholder="1234 1234 1234 1234" value="makurseme@gmail.com"> <!--(( required }}-->
                                <div class="error">required</div> 
                           </div>
                           <div class="form-group">
                                <input type="" name="orderID" placeholder="1234 1234 1234 1234" value="345">
                                <div class="error">required</div> 
                            </div>
                            <div class="form-group">
                                <input type="" name="amount" value="800000"> {{-- required in kobo --}}
                                <div class="error">required</div> 
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="currency" value="NGN">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                
                            </div>
                            <div class="form-group">
                                 <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                            </div>
                           <button class="btn" value="Pay Now!">Pay Now!</button>
                       </form>
                   </div>
                   <div class="message__wrapper">
                       <h2>Add card details</h2>
                    </div>
               </div>
            </div>
        </div>
   </div>
</section> 
@endsection
