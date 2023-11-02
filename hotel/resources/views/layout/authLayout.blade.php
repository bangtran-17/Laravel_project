<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    <link href="{{url('css/app.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f2c88cd29f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>

<body class="bg-right-top bg-no-repeat" style="width:100%; height:100vh; background-image: url({{url('img/Liquid.png')}});">
    <div class="row">
        <div class="col-6">
            <img class="img-fluid inline-block" src="{{asset('img/register.png')}}" alt="anhnen">
        </div>
        <div class="flex flex-col col-6"> 
            <a href="" class=""><i class="fa-solid fa-house float-right p-12"></i></a>
            <div class=""> <img class="img-fluid inline-block d-inline-block anhW" src="{{asset('img/welcome.png')}}" alt=""></div>
           @yield('content')
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
        <script src="{{url('js/app.js')}}"></script>
</body>

</html>