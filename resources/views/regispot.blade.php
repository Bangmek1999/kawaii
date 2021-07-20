@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="p-5">

            @if ($errors->all())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif

            {!! Form::open(['class' => 'user', 'action' => 'PlantController@store', 'method' => 'POST']) !!}
            <div class="col-md-6 ">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Pot Register</h1>
                </div>
                <div class="from-group">
                    {!! Form::label('User', null, ['class' => 'text-gray-900 ']) !!}
                    {!! Form::text('User', Auth::user()->name, ['class' => 'form-control form-control-user']) !!}
                </div>
                <div class="from-group">
                    {!! Form::label('PotName', null, ['class' => 'text-gray-900 ']) !!}
                    {!! Form::text('Potname', null, ['class' => 'form-control form-control-user']) !!}
                </div>
                <div class="from-group">
                    {!! Form::label('MacAddress', null, ['class' => 'text-gray-900 ']) !!}
                    {!! Form::text('Mac', null, ['class' => 'form-control form-control-user']) !!}
                </div>
                {!! Form::text('status', '1', ['class' => 'invisible']) !!}
                {!! Form::text('Email', Auth::user()->email, ['class' => 'invisible']) !!}

                <br>
                {!! Form::label('Select Avata', null, ['class' => ' text-gray-900 ']) !!}
                <div class="row">
                    <div class="col">
                        <div class="radio">
                            <img src="/img/seed_1.png" alt="1" class="rounded" style="width: 100%">
                            <br>
                            {!! Form::radio('avata', 'option1', false, ['id' => 'radio1']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="radio">
                            <img src="/img/seed_2.png" alt="..." class="rounded" style="width: 100%">
                            <br>
                            {!! Form::radio('avata', 'option2', false, ['id' => 'radio2']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="radio">
                            <img src="/img/seed_3.png" alt="..." class="rounded" style="width: 100%">
                            <br>
                            {!! Form::radio('avata', 'option3', false, ['id' => 'radio3']) !!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="radio">
                            <img src="/img/seed_4.png" alt="..." class="rounded" style="width: 100%">
                            <br>
                            {!! Form::radio('avata', 'option4', false, ['id' => 'radio4']) !!}
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" value="บันทึก" class="btn btn-primary btn-user btn-block">
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@endsection
