@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <img src='https://cdn.lowgif.com/full/42238b993f1a30d9-.gif' class="card-img-top" width="150" height="220">
            <div class="card-body">
                <h5 class="card-title">Light</h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/light') }}">Go Dashboard</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <img src='https://i.makeagif.com/media/4-04-2016/41YV5O.gif' class="card-img-top" width="150" height="220">
            <div class="card-body">
                <h5 class="card-title">Humidity </h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/DHT') }}">Go Dashboard</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <img src='https://lastminuteengineers.com/wp-content/uploads/arduino/Soil-Moisture-Sensor-Working.gif' class="card-img-top" width="150" height="220">
            <div class="card-body">
                <h5 class="card-title">Soil Moisture </h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/EC') }}">Go Dashboard</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <img src='https://static.onecms.io/wp-content/uploads/sites/38/2019/07/26204613/190726-fever-guide-gif.gif' class="card-img-top" width="200" height="220">
            <div class="card-body">
                <h5 class="card-title">Temperature </h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/Temp') }}">Go Dashboard</a>
            </div>
        </div>
    </div>
</div>


@stop