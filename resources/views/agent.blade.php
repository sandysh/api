<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css" media="screen">
            body{
                font-family: preeti;
                font-size: 20px;
                width: 800px;
                height: 800px;
                margin: 10px;
            }              
        </style>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
        <ul class="list-group">
            @foreach($data as $agent)
               <li class="list-group-item"> {{$agent->firstName}} </li>
            @endforeach   
        </ul> 
    </body>
</html>