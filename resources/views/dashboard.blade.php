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
    <script src="{{ asset('js/dashbroad.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/dashbroad.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        

    </style>

</head>

<body>


    <div class="container">
        {{-- {{ Auth::user()->email }} --}}
        {{-- <h5 id="Temp"> </h5>
        <h5 id="Humidity"> </h5>
        <h5 id="EC"> </h5>
        <h5 id="Light"> </h5>
        <h5 id="date"> </h5> --}}

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            กติกา
          </button>

          <!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">กติกา</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
         สถานะ สีเหลือง คือ ต่ำ<br>
         <img   src="/img/lowbar.JPG"  ><br>
         สถานะ สีเขียว คือ ปกติ<br>
         <img   src="/img/nomalbar.JPG"  ><br>
         สถานะ สีส้ม คือ สูง<br>
         <img   src="/img/hightbar.JPG"  ><br>

        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6  ">
                <div class="card-body">
                    <img class="img" src="/img/soil.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Soil Moisture </h5>
                        <div class="hp">
                            <div class="bar">
                                <div class="progress_bar">
                                    <div class="pro-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar" role="progressbar"
                                                style="background-color: #eb9617;width: 100%" aria-valuenow="33"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-bar-inner" id="EC_hp" style="width: 100%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6  ">
                <div class="card-body">
                    <img class="img" src="/img/temp.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Temperature</h5>
                        <div class="hp">
                            <div class="bar">
                                <div class="progress_bar">
                                    <div class="pro-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar" role="progressbar"
                                                style="background-color: #eb9617;width: 100%" aria-valuenow="33"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-bar-inner" id="Temp_hp" style="width: 100%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6  ">
                <div class="card-body">
                    <img class="img" src="/img/humitity.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Humidity</h5>
                        <div class="hp">
                            <div class="bar">
                                <div class="progress_bar">
                                    <div class="pro-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar" role="progressbar"
                                                style="background-color: #eb9617;width: 100%" aria-valuenow="33"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-bar-inner" id="Humidity_hp" style="width: 100%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6  ">
                <div class="card-body">
                    <img class="img" src="/img/light.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Light</h5>
                        <div class="hp">
                            <div class="bar">
                                <div class="progress_bar">
                                    <div class="pro-bar">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                                aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar" role="progressbar"
                                                style="background-color: #eb9617;width: 100%" aria-valuenow="33"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="progress-bar-inner" id="Light_hp" style="width: 100%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

    </div>






    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                    <h1>
                        <a class="btn btn-secondary" href="{{ route('chart') }}">
                            <h3>แสดงกราฟ</h3>
                        </a>
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                    <h1>
                        <i class="fas fa-seedling"></i>
                        <a href="{{ route('home') }}">Animation</a>
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 ">
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
