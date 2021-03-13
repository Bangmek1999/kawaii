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
            background-image: url("https://images.unsplash.com/photo-1547516508-e910d368d995?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80");
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
            top: 200px;
            left: 750px;
            width: 20%;
            height: 50%;

        }

    </style>

</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <img src='https://cdn.lowgif.com/full/42238b993f1a30d9-.gif' class="card-img-top" width="150"
                    height="220">
                <div class="card-body">
                    <h5 class="card-title">Light</h5>
                    <h1 class="text-center" id="Light"></h1>

                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

                <img src='https://i.makeagif.com/media/4-04-2016/41YV5O.gif' class="card-img-top" width="150"
                    height="220">
                <div class="card-body">
                    <h5 class="card-title">Humidity </h5>
                    <h1 class="text-center" id="Humidity"></h1>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

                <img src='https://lastminuteengineers.com/wp-content/uploads/arduino/Soil-Moisture-Sensor-Working.gif'
                    class="card-img-top" width="150" height="220">
                <div class="card-body">
                    <h5 class="card-title">Soil Moisture </h5>
                    <h1 class="text-center" id="EC"></h1>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <img src='https://static.onecms.io/wp-content/uploads/sites/38/2019/07/26204613/190726-fever-guide-gif.gif'
                    class="card-img-top" width="200" height="220">
                <div class="card-body">
                    <h5 class="card-title">Temperature </h5>
                    <h1 class="text-center" id="Temp"></h1>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <div class="card" style="width: 15rem; ">
                    <img class="card-img-top"
                        src="https://www.pngfind.com/pngs/m/175-1755423_soil-clipart-soil-profile-icon-soil-png-transparent.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h1 class="text-center" id="EC"></h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card" style="width: 15rem; ">
                    <img class="card-img-top"
                        src="https://en.pimg.jp/044/251/979/1/44251979.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h1 class="text-center" id="Temp"></h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4"></div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card" style="width: 15rem; " >
                    <img class="card-img-top"
                        src="https://e7.pngegg.com/pngimages/314/726/png-clipart-moisture-computer-icons-humidity-others-desktop-wallpaper-weather-icon.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <h1 class="text-center" id="Humidity"></h1>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card" style="width: 15rem; ">
                    <img class="card-img-top"
                        src="https://png.pngtree.com/png-vector/20190629/ourmid/pngtree-sun-icon-design-png-image_1518941.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h1 class="text-center" id="Light"></h1>
                    </div>
                </div>
            </div>
        </div> --}}
        <a class="btn btn-secondary" href="{{ route('chart') }}">
            <h3>แสดงกราฟ</h3>
        </a>
    </div>
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
                    </h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
