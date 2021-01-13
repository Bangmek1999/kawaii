@extends('layouts.app')
@section('content')

<div class="container">
    <h3>ข้อมูล</h3>
    <div class="card-center" style="width: 20rem;">
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
    </div>
</div>
<a   class="btn btn-secondary" href="{{ url('/dashboard') }}">DashBoard</a>

@stop