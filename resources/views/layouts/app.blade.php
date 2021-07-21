<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="text/javascript" href="{{ asset('/js/main.js') }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    <!--inclide the header section -->
    @include('layouts/header')

    @yield('content')

    @include('sweetalert::alert')
</body>
</html>