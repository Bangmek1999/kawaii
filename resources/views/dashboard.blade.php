<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/slide.js') }}" defer></script>
    <script src="{{ asset('js/Datasensor.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/slidebar.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        html,
        body {
            /* background-image: url('../../img/3.png'); */
            /* background-image: url("https://images.unsplash.com/photo-1547516508-e910d368d995?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80"); */
            background-color: #afdbd2;

            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100%;
            margin: 0;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 10%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
        }

        .img-thumbnail {
            position: absolute;
            top: 300px;
            left: 1500px;
            width: 20%;
            height: 50%;

        }

        img {
            border-radius: 50%;
            width: 15rem;
        }

    </style>

</head>

<body>
    <br>
    <div class="container">    
        <div class="row">
            <div class="col-12 col-sm-6  ">
                <div class="card-body">
                    <img class="img" src="/img/soil.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Soil Moisture </h5>
                        <h1 class="text" id="EC"></h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="card-body">
                    <img class="img" src="/img/temp.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Temperature</h5>
                        <h1 class="text" id="Temp"></h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="card-body">
                    <img class="img" src="/img/humitity.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Humidity</h5>
                        <h1 class="text" id="Humidity"></h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="card-body">
                    <img class="img" src="/img/light.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Light</h5>
                        <h1 class="text" id="Light"></h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ route('chart') }}">
            <h3>แสดงกราฟ</h3>
        </a>
            <img  id="myImg" src="https://www.w3schools.com/jsref/compman.gif" >
    </div>

    {{-- <img src="https://i.pinimg.com/originals/e8/88/d4/e888d4feff8fd5ff63a965471a94b874.gif" alt="..."
        > --}}

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 ">
                    <h1>
                        <i class="fas fa-seedling"></i>
                        <a href="{{ route('home') }}">Animation</a>
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-6 ">
                    <h1 class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
