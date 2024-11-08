<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
    <style>
        #banner{
            padding-top: 62px;
            height:100vh;
            width:100%;
        }

    </style>
</head>
<body>
    @section('content')
        @include('layouts.navigation')

        <img id="banner"   src="{{asset('images/reserva.png')}}" alt="">
</body>
</html>
