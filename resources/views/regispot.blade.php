@extends('layouts.app')
@section('content')
<div class="container">
    <div class="p-5">

    @if ($errors->all())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
         <li>
           {{$error}}
         </li>   
        @endforeach
    </ul>
    @endif

      {!! Form::open(['class'=>"user",'action' => 'PlantController@store','method'=>'POST']) !!}
      <div class="col-md-6 ">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Pot Register</h1>
        </div>
        <div class="from-group">
          {!! Form::label('User',null,['class'=>"text-gray-900 "])!!}
          {!! Form::text('User',Auth::user()->name,["class" => "form-control form-control-user"]) !!}
      </div>
          <div class="from-group">
              {!! Form::label('PotName',null,['class'=>"text-gray-900 "])!!}
              {!! Form::text('Potname',null,["class" => "form-control form-control-user"]) !!}
          </div>
          <div class="from-group">
              {!! Form::label('MacAddress',null,['class'=>"text-gray-900 "])!!}
              {!! Form::text('Mac',null,["class" => "form-control form-control-user"]) !!}
          </div>
          {{-- <div class="from-group">
              {!! Form::label('SprouDay',null,['class'=>"h5 text-gray-900 "])!!}
              {!! Form::text('SprouDay',null,["class" => "form-control form-control-user"]) !!}
          </div> --}}
          <br>
          <input type="submit" value="บันทึก"  class="btn btn-primary btn-user btn-block" >
      </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection