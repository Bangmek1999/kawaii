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

    </style>
</head>

<body>
    <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">{{ Auth::user()->name }}</a>
            </li>
            {{-- <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{ route('/dashboard/light') }}">Light</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{ route('/dashboard/DHT') }}">Humidity</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{ route('/dashboard/EC') }}">Soil Moisture</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{ route('/dashboard/Temp') }}">Temperature</a>
            </li> --}}
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <script src="js/stylish-portfolio.min.js"></script>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h1 class="btn">
                        <i class="fas fa-chart-line" href="{{ route('dashboard') }}"></i>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h1>
                        <i class="fas fa-seedling"></i>
                        Animetion
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
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
