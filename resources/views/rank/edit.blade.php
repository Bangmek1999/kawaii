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
        <br><br><br>
        <div class="card">
            <form action="/submitrank/{{ $data_edit->id }}" method="POST" novalidate>
                @csrf
                <div class="modal-body">
                    <h2 id="User_name">ชื่อ</h2>
                    <h2 id="User_pot">ชื่อ</h2>
                    <h2 id="rank_show">คะแนน</h2>
                    {{-- <h3 id="rank_result" ></h3> --}}
                    <div class="form-group">
                        <label for="exampleInputPassword1">แคปชั่น</label>
                        <input type="text" name="text" class="form-control" id="exampleInputPassword1"
                            value="{{ $data_edit->text }}">
                    </div>
                    <div class="form-group">
                        <label for="rank_result"> </label>
                        <input id="rank_result" type="number" name="rank_point" class="form-control invisible">
                        <input type="text" name="potname" class="form-control invisible" id="User_pot_input"
                            value='{{ $data_edit->potname }}'>
                        <input type="text" name="username" class="form-control  invisible " id="User_name_input"
                            value='{{ $data_edit->username }}'>
                        <input type="text" name="status" class="form-control invisible" value='2'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Update</button>
                </div>
            </form>
        </div>



</body>

</html>
