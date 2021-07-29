@extends('layouts.app')

<!--include header page-->
@section('title' , 'Register')

@section('content')

<div class="Auth_container">
     <h2>Register</h2>

     @if(Session::get('fail'))
          <div class="alert-alert-__fail">
              {{ Session::get('success') }}
          </div>
     @endif
     <form action="{{ route('save.user') }}" method="post">
            @csrf
            <div class="form-Control">
                 <label for="Email">Email:</label>
                 <input 
                    type="text"
                    class="form-control" 
                    name="email" 
                    id="Email" 
                    value="{{ old('email') }}" 
                    placeholder="Fadaka_example@gmail.com" 
                    autofocus>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-Control">
                <label for="userName">Username:</label>
                <input 
                    type="text" 
                    name="username" 
                    id="userName" 
                    value="{{ old('username') }}"
                    placeholder="Enter Your username">
                @error('username')
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
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-Control">
                <label for="password_confirmation">Confirm password:</label>
                <input 
                    type="password" 
                    name="password_confirmation" 
                    id="pass_conf"
                    placeholder="Confirm Your password">
                @error('pass_conf')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn" >Submit</button>
            <div class="Auth__link">
                <div class="Auth__link-wrapper">
                    <p>Already a Menber? <a href="{{ route('Auth.login') }}">Login</a></p>
                </div>
                <div class="Auth__link-wrapper">
                    <p>Verify That you are not a robot<a href="#">Recaptcher</a></p>
                </div>
            </div>
     </form>
</div>
     
@endsection