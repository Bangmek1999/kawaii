@extends('layouts.app')
@section('content')
<a class="btn btn-secondary" href="{{ route('dashboard') }}">DashBoard</a>
<div class="container">
    <h3>Animation</h3>
    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
        <img src='https://i.pinimg.com/originals/e8/88/d4/e888d4feff8fd5ff63a965471a94b874.gif' class="card-img-top" width="300" height="500">
    </div>
    <!-- <div class="card-center" style="width: 20rem;">
        <div class="card-body">
            <table class="table table-brodered table-striped">
                <tr class="table-primary">
                    <td>ID</td>
                    <th>Frist Name</th>
                    <th>Light</th>
                    <th>DHT_temp</th>
                    <th>DHT_Humid</th>
                    <th>EC1</th>
                    <th>EC2</th>
                    <th>EC3</th>
                    <th>Temp1</th>
                    <th>Temp2</th>
                </tr>
                @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->mac}}</td>
                    <td>{{$row->light}}</td>
                    <td>{{$row->DHT_temp}}</td>
                    <td>{{$row->DHT_Humidity}}</td>
                    <td>{{$row->EC1}}</td>
                    <td>{{$row->EC2}}</td>
                    <td>{{$row->EC3}}</td>
                    <td>{{$row->dallas_temp1}}</td>
                    <td>{{$row->dallas_temp2}}</td>
                </tr>
                @endforeach
            </table>


        </div>
    </div>
    <div>
        {{$data->links()}}
    </div> -->

</div>

@stop