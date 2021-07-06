<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>
</head>
<body>
    @section('header')
    <header>
            <div class="menu-nav">
                  <h2>fadaka</h2>
            </div>

            <div class="nav">
                 <ul class="menu-nav">
                     <li><a href="/pages/home">Home</a></li>
                     <li><a href="/pages/about">About us</a></li>
                     <li><a href="/pages/contact">Contact us</a></li>
                     <li><a href="/pages/faq">Faq</a></li>
                 </ul>
            </div>
    </header>
    @yield('content')

    @section('footer')
    
    @include('footer')
</body>
</html>