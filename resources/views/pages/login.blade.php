@extends('layouts.app')
<!--include header page-->
@section('title' , 'Login')

@section('content')
<div class="Auth_container">
    <h2>Login</h2>
    @if(Session::get('fail'))
      <div class="alert-alert-__fail">
          {{ Session::get('fail') }}
       </div>
    @endif
    <form action="{{ route('Auth.logged') }}" method="post">
           @csrf
           <div class="form-Control">
                <label for="Email">Email:</label>
                <input 
                type="text" 
                name="email" 
                id="Email" 
                value="{{ old('email') }}"
                placeholder="Fadaka_example@gmail.com">
                @error('email')
                     <div class="error">{{ $message }}</div>
                @enderror
           </div>

           <div class="form-Control">
               <label for="Pass">Password:</label>
               <input 
                    type="password" 
                    name="password" 
                    id="pass" 
                    placeholder="Password">
                    @error('password')
                        <div class="error">Password cannot be empty</div>
                    @enderror
           </div>
            <div class="Auth__link-wrapper">
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
             </div>

           <button type="submit" class="btn">Submit</button>
           <div class="Auth__link">
               <div class="Auth__link-wrapper">
                   <p>Need an account? <a href="{{ route('Auth.register') }}">create account</a></p>
               </div>
           </div>
    </form>
</div> 
@endsection