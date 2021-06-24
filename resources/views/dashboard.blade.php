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

.hp {
  text-align: center;
  padding-bottom: 50px;
}

.gage {
  display: inline-block;
  width: 500px;
  padding-bottom: 30px;
}

.bar {
  height: 60px;
  position: relative;
  background: #555;
  -moz-border-radius: 25px;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  padding: 10px;
  box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
}

.bar>span {
  display: block;
  height: 100%;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background-color: rgb(43, 194, 83);
  background-image: linear-gradient( center bottom, rgb(43, 194, 83) 37%, rgb(84, 240, 84) 69%);
  box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3), inset 0 -2px 6px rgba(0, 0, 0, 0.4);
  position: relative;
  overflow: hidden;
}

.lvl {
  background-color: #078a25;
  background-image: linear-gradient(to bottom, #078a25, #f36d0a);
}

#EC_hp {
  font-size: 20px;
  color: white;
  font-weight: bold;
  text-align: right;
}
#Temp_hp {
  font-size: 20px;
  color: white;
  font-weight: bold;
  text-align: right;
}#Humidity_hp {
  font-size: 20px;
  color: white;
  font-weight: bold;
  text-align: right;
}#Light_hp {
  font-size: 20px;
  color: white;
  font-weight: bold;
  text-align: right;
}

.btn-3d {
  position: relative;
  display: inline-block;
  font-size: 22px;
  padding: 20px 60px;
  color: white;
  margin: 20px 10px 10px;
  border-radius: 6px;
  text-align: center;
  transition: top .01s linear;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.15);
  cursor: pointer;
}

.btn-3d.green:hover {
  background-color: #80C49D;
}

.btn-3d:active {
  top: 9px;
}

.btn-3d.green {
  background-color: #82c8a0;
  box-shadow: 0 0 0 1px #82c8a0 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 rgba(126, 194, 155, .7), 0 8px 0 1px rgba(0, 0, 0, .4), 0 8px 8px 1px rgba(0, 0, 0, 0.5);
}

.btn-3d.green:active {
  box-shadow: 0 0 0 1px #82c8a0 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 0 0 1px rgba(0, 0, 0, 0.4);
}

.btn-3d.red:hover {
  background-color: #e74c3c;
}

.btn-3d.red {
  background-color: #e74c3c;
  box-shadow: 0 0 0 1px #c63702 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 #C24032, 0 8px 0 1px rgba(0, 0, 0, 0.4), 0 8px 8px 1px rgba(0, 0, 0, 0.5);
}

.btn-3d.red:active {
  box-shadow: 0 0 0 1px #c63702 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 0 0 1px rgba(0, 0, 0, 0.4);
}

    </style>

</head>

<body>

    <br>
    <div class="container">    
        <div class="click">
            <span class="btn-3d green" onclick="add(),add1(),add2(),add3(); return true;">Health</span>
          </div>
          <div id="ha"></div>
        <div class="row">
            <div class="col-12 col-sm-6  ">
                <div class="card-body">
                    <img class="img" src="/img/soil.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Soil Moisture </h5>
                        <div class="hp">
                            <div class="gage">
                              <div class="bar">
                                <span id="EC_hp" class="lvl" style="width: 100%">100hp</span>
                              </div>
                            </div>
                            
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="card-body">
                    <img class="img" src="/img/temp.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Temperature</h5>
                        <div class="hp">
                            <div class="gage">
                              <div class="bar">
                                <span id="Temp_hp" class="lvl" style="width: 100%">100hp</span>
                              </div>
                            </div>
                            
                        </div>                         </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="card-body">
                    <img class="img" src="/img/humitity.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Humidity</h5>
                        <div class="hp">
                            <div class="gage">
                              <div class="bar">
                                <span id="Humidity_hp" class="lvl" style="width: 100%">100hp</span>
                              </div>
                            </div>
                            
                        </div>                         </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 ">
                <div class="card-body">
                    <img class="img" src="/img/light.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Light</h5>
                        <div class="hp">
                            <div class="gage">
                              <div class="bar">
                                <span id="Light_hp" class="lvl" style="width: 100%">100hp</span>
                              </div>
                            </div>
                            
                        </div>                         </div>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ route('chart') }}">
            <h3>แสดงกราฟ</h3>
        </a>
            {{-- <img  id="myImg" src="https://www.w3schools.com/jsref/compman.gif" > --}}
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
