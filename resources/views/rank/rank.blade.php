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
    <link rel="stylesheet" href="css/regis_rank.css">
    {{-- <link rel="stylesheet" href="css/style3.css"> --}}
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
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

    </style>
</head>

<body>

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="background-color:rgb(219, 221, 87); max-width: 18rem; border-radius: 10%;">
                    <img class=" img-fluid" src="/img/seed_2.png">
                    <div class="card-body">
                        <h1 class="card-title">อันดับ2</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="background-color:rgb(226, 100, 50); max-width: 18rem; border-radius: 10%;">
                    <img class=" img-fluid" src="/img/seed_4.png">
                    <div class="card-body">
                        <h1 class="card-title">อันดับ1</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="background-color:rgb(130, 221, 87); max-width: 18rem; border-radius: 10%;">
                    <img class=" img-fluid" src="/img/seed_1.png">
                    <div class="card-body">
                        <h1 class="card-title">อันดับ3</h1>
                        <h4>ใส่สบงแล้วทรงพลัง</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="center">
            <div class="text-center">

                @foreach ($userpot as $row)
                    <a href="{{ route('rank.edit', $row->id) }}" class="btn btn-primary">
                        <h4>ตรวจสอบคะแนนปัจจุบันของคุณ</h4>
                    </a>
                @endforeach


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
                <form action="submit" method="POST" novalidate>
                    @csrf

                    <div class="modal-body">
                        <h2 id="User_name">ชื่อ</h2>
                        <h2 id="User_pot">ชื่อ</h2>
                        <h2 id="rank_show">คะแนน</h2>
                        {{-- <h3 id="rank_result" ></h3> --}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">แคปชั่น</label>
                            <input type="text" name="text" class="form-control" id="exampleInputPassword1" value=''>
                        </div>
                        <div class="form-group">
                            <label for="rank_result"> </label>
                            <input id="rank_result" type="number" name="rank_point" class="form-control invisible">
                            <input type="text" name="potname" class="form-control invisible" id="User_pot_input"
                                value=''>
                            <input type="text" name="username" class="form-control invisible" id="User_name_input"
                                value=''>
                            <input type="text" name="status" class="form-control invisible" value='2'>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- -------------------------------------------------------------------------------- --}}
    <div class="container">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">potname</th>
                    <th scope="col">Point</th>
                    <th scope="col">Note</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $rankdatas)
                    <tr class="table-success">
                        <td>{{ $rankdatas->username }}</td>
                        <td>{{ $rankdatas->potname }}</td>
                        <td>{{ $rankdatas->rank_point }}</td>
                        <td>{{ $rankdatas->text }}</td>
                    </tr>
                @endforeach
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
