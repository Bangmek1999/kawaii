@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <img src='https://png.pngtree.com/png-vector/20190629/ourmid/pngtree-sun-icon-design-png-image_1518941.jpg' class="card-img-top" width="150" height="220">
            <div class="card-body">
                <h5 class="card-title">Light</h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/light') }}">Go Dashboard</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <img src='https://static.vecteezy.com/system/resources/previews/000/442/113/non_2x/humidity-vetor-icon-vector.jpg' class="card-img-top" width="150" height="220">
            <div class="card-body">
                <h5 class="card-title">Humidity </h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/DHT') }}">Go Dashboard</a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

            <img src='https://spng.pngfind.com/pngs/s/175-1755423_soil-clipart-soil-profile-icon-soil-png-transparent.png' class="card-img-top" width="150" height="220">
            <div class="card-body">
                <h5 class="card-title">Soil Moisture </h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/EC') }}">Go Dashboard</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <img src='https://previews.123rf.com/images/yupiramos/yupiramos1801/yupiramos180129661/94612470-thermometer-for-temperature-icon-vector-illustration-design.jpg' class="card-img-top" width="200" height="220">
            <div class="card-body">
                <h5 class="card-title">Temperature </h5>
                <a class="btn btn-secondary" href="{{ route('/dashboard/Temp') }}">Go Dashboard</a>
            </div>
        </div>
    </div>
</div>


@stop