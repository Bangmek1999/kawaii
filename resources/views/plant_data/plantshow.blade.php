@extends('layouts.app')
@section('content')
<div class="container">
    <h3>ข้อมูล</h3>

</div>
<table class="table table-brodered table-striped">
      <tr class="table-primary">
        <td>ID</td>
        <th>Frist Name</th>
        <th>Light</th>
        <th>DHT_temp</th>
        <th>DHT_Humid</th>

      </tr>
      @foreach($data as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->mac}}</td>
        <td>{{$row->light}}</td>
        <td>{{$row->DHT_temp}}</td>
        <td>{{$row->DHT_Humidity}}</td>
      </tr>
      @endforeach
    </table>
    <div>
      {{$data->links()}}
    </div>
    <!-- <table class="table table-brodered table-striped">
      <tr class="table-primary">
        <td>ID</td>
        <th>Frist Name</th>
        <th>Light</th>
        <th>DHT_temp</th>
        <th>DHT_Humid</th>

      </tr>
      @foreach($data as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->mac}}</td>
        <td>{{$row->light}}</td>
        <td>{{$row->DHT_temp}}</td>
        <td>{{$row->DHT_Humidity}}</td>
      </tr>
      @endforeach
    </table> -->
    <!-- <div>
      {{$data->links()}}
    </div> -->
@stop
