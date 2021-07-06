@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title','Home')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    @section('content')
      <div class="landing__page">
          <div class="landing__page__wrapper">
                <a href="">Get started</a>
          </div>
      </div>
      <h2>Fadaka</h2>
      <h4>Your Personal Finance App</h4>
      <h6>easy banking...</h6>
     @endsection 
</body>
</html>