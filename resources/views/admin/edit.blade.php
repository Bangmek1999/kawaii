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
    {{-- {{$data_edit}} --}}
      {!! Form::open(['action' => ['PlantController@update',$data_edit->id],'method'=>'PUT']) !!}
      <div class="col-md-6 ">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Pot Register</h1>
        </div>
        <div class="from-group">
          {!! Form::label('User',null,['class'=>"text-gray-900 "])!!}
          {!! Form::text('User',$data_edit->User,["class" => "form-control form-control-user"]) !!}
      </div>
          <div class="from-group">
              {!! Form::label('PotName',null,['class'=>"text-gray-900 "])!!}
              {!! Form::text('Potname',$data_edit->PotName,["class" => "form-control form-control-user"]) !!}
          </div>
          <div class="from-group">
              {!! Form::label('MacAddress',null,['class'=>"text-gray-900 "])!!}
              {!! Form::text('Mac',$data_edit->Mac,["class" => "form-control form-control-user"]) !!}
          </div>
          <div class="from-group">
              {!! Form::label('Status',null,['class'=>" text-gray-900 "])!!}
              {!! Form::text('status',$data_edit->status,["class" => "form-control form-control-user"]) !!}
          </div>
          <br>
          <input type="submit" value="บันทึก"  class="btn btn-primary btn-user btn-block" >
      </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection