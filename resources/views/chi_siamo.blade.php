<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
             *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
           a{
            text-decoration: none;
            font-size: 50px;
            color: white;
            padding: 20px;
           }
           a:hover{
               background-color: white;
               color: black;
           }
           nav{
               background-color: black;
               text-align: center;
               padding: 30px;
           }
           h1{
               text-align: center;
               font-size: 100px;
           }
           h2,ul,li{
               text-align: center;
               margin-bottom: 20px;
           }

        </style>
    </head>
    <body>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('chi_siamo')}}">Chi Siamo</a>
            <a href="{{route('info')}}">Info</a>
            <a href="{{route('contact')}}">Contact</a>
        </nav>
        <h2>Siamo dei bravi studenti...</h2>
        <ul>
            @foreach($lista as $item)
            <li>{{$item}}</li>
            @endforeach
        </ul>
    </body>
</html>