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
        </style>
    </head>
    <body>
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('chi_siamo')}}">Chi Siamo</a>
            <a href="{{route('info')}}">Info</a>
            <a href="{{route('contact')}}">Contact</a>
        </nav>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia animi ipsum deserunt delectus aliquam omnis corporis veritatis amet incidunt eaque voluptate aut, nemo corrupti quidem quaerat fugit eum exercitationem quos atque ullam, in necessitatibus repellendus impedit. Pariatur quos reprehenderit quia autem, omnis eveniet soluta porro aut qui perferendis libero enim?</p>
    </body>
</html>