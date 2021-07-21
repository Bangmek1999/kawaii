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
    <script src="{{ asset('js/rank.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/rank.css">
    {{-- <link rel="stylesheet" href="css/style3.css"> --}}

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>


    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="background-color:rgb(219, 221, 87); width: 18rem; border-radius: 10%;">
                    <img class=" img-fluid" src="/img/seed_2.png">
                    <div class="card-body">
                        <h1 class="card-title">อันดับ2</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="background-color:rgb(226, 100, 50); width: 18rem; border-radius: 10%;">
                    <img class=" img-fluid" src="/img/seed_4.png">
                    <div class="card-body">
                        <h1 class="card-title">อันดับ1</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="background-color:rgb(130, 221, 87); width: 18rem; border-radius: 10%;">
                    <img class=" img-fluid" src="/img/seed_1.png">
                    <div class="card-body">
                        <h1 class="card-title">อันดับ3</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="center">
            <div class="text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <h4>กรุณา เช็คอันดับ</h4>
                </button>
            </div>
        </div>
    </div>
    <br><br>
    {{-- <h2 id="rank_result"></h2> --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Name: <input type="text" id="rank_result" value="">
                    {!! Form::open(['class' => 'user', 'action' => 'PlantController@store', 'method' => 'POST']) !!}
                    <div class="text-center ">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Pot Register</h1>
                            <h2 id="rank_result">คะแนน</h2>

                        </div>
                        <div class="from-group">
                            {!! Form::label('User', null, ['class' => 'text-gray-900 ']) !!}
                            {!! Form::text('User', Auth::user()->name, ['class' => 'form-control form-control-user']) !!}
                        </div>
                        {!! Form::text('status', '1', ['class' => 'invisible']) !!}
                        {!! Form::text('Email', Auth::user()->email, ['class' => 'invisible']) !!}
        
                       
                        <br>
                        <input type="submit" value="บันทึก" class="btn btn-primary btn-user btn-block">
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- -------------------------------------------------------------------------------- --}}
    <div class="container">
        <table class="table shadow-sm p-3 mb-5 bg-white rounded">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">User</th>
                    <th scope="col">Point</th>
                    <th scope="col">Level</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
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

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/282b12b8c3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style3.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/rank.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <p class="" style="text-align:center;font-weight: bold;">LEADERBOARD</p>
        </div>
    </header>

    <section class="leader_area ">
        
            <div class="leader_crad1">
                 <!-- ที่หนึ่ง -->
                 <div class="card_winner">
                    
                    <i class="fas fa-crown " style="font-size:48px;color:gold;"></i>
               
                
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 15rem;">
                    <img src="https://cdn.pixabay.com/photo/2021/07/06/21/55/meerkat-6392737_960_720.jpg" class="card-img-top p-3 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">น้องดาวเรือง</h5>
                        <p class="card-text">14000 point</p>
                    </div>
                </div> 
                </div>
            </div>
       
            <div class="leader_card2">
            
                <!-- ที่สอง -->
                <div class="card_first_runner_up" >
                  
                        <i class="fas fa-crown " style="font-size:36px;color:silver;"></i>
                   
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 15rem;">
                        <img src="https://cdn.pixabay.com/photo/2015/06/08/15/02/pug-801826_960_720.jpg" class="card-img-top p-3 " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">น้องดาวเรือง</h5>
                            <p class="card-text">14000 point</p>
                        </div>
                    </div> 
                </div>

               

                <!-- ที่สาม -->
                <div class="card_second_runner_up">
                   
                        <i class="fas fa-crown " style="font-size:36px;color:rgb(192, 96, 32);"></i>
                    
                    
                    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 15rem;">
                        <img src="https://cdn.pixabay.com/photo/2021/07/13/11/34/cat-6463284_960_720.jpg" class="card-img-top p-3 " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">น้องดาวเรือง</h5>
                            <p class="card-text">14000 point</p>
                        </div>
                    </div> 
                </div>
            </div>
        
    </section>

    <!-- table -->
    <section class="table_another_player">
        <div class="container">
            <table class="table shadow-sm p-3 mb-5 bg-white rounded">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">User</th>
                    <th scope="col">Point</th>
                    <th scope="col">Level</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </section>
</body>
</html> --}}
