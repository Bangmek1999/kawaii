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
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    @if (Auth::user()->hasRole('manager'))
        <div>
            <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <div class="container">
                <video id="myVideo" autoplay muted loop>
                    <source id="mp4_src" src="/img/wall_seed.mp4" type="video/mp4">
                </video>
                <div class="overlay">
                    <h1>น้องดาวเรือง</h1>
                        {{-- <h1>{{ Auth::user()->name }}</h1> --}}
                        {{-- <h5 id="date1"> </h5>
                        <h5 id="date2"> </h5>--}}
                        
                      <h2 id="Difference_In_Days"> </h2>
                        <div class="hp">
                            <div class="gage">
                                <div class="bar">
                                    <span id="sumhp" class="lvl" style="width: 100%"></span>
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <h1 class="btn ">
                                <i class="fas fa-chart-line" href="{{ route('dashboard') }}"></i>
                                <a href="{{ route('dashboard') }}">Dashboard</a>

                            </h1>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <h1 class="text-name">
                                <i class="fas fa-seedling"></i>
                                Animation
                            </h1>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
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
        </div>
    @endif

    @if (Auth::user()->hasRole('developer'))
        <div class="container">
            <h2>ข้อมูลลูกค้า</h2>
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">PotName</th>
                            <th scope="col">Mac</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pot_data as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->User }}</td>
                                <td>{{ $row->PotName }}</td>
                                <td>{{ $row->Mac }}</td>
                                <td>{{ $row->status }}</td>
                                <td> <a href="{{ route('admin.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-4">
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
        </div>
    @endif
</body>

</html>
