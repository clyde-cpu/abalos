<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'MyProject') }}</title>
    <style>
        <link rel="stylesheet"href=""{{asset('css/app/css') }}">
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }
        h1 {
            background: linear-gradient(90deg, rgba(33, 147, 176, 1) 0%, rgba(109, 213, 237, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 4em;
            margin: 0;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/random/1920x1080');
            filter: blur(10px);
            z-index: -1;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }
    </style>
</head>
<body>
  <div class="background"></div>
    <div class="overlay"></div>
    <div>@yield('content')</div>
    <div>@extends('layouts.app')
        @section('content')
        <h1>Welcome To Laravel</h1>
        <p>blah blah.....</p>
        @endsection
    </div>
</body>
</html>
