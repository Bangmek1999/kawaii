@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <h1>กรุณาชำระเงิน</h1>
                <img class="img"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png"
                    width="50%">
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <h2 class="card-header w-100 m-1 text-center">Upload Image</h2>
                </div>
                <div class="row justify-content-center">
                    {{-- enctype attribute is important if your form contains file upload --}}
                    {{-- Please check https://www.w3schools.com/tags/att_form_enctype.asp for further info --}}
                    <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            {{-- <label for="name">File Name</label> --}}
                            <input type="text" class="form-control" id="name" placeholder="Enter file Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input id="image" type="file" name="image">
                        </div>
                        <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
                    </form>
                </div>
                {{-- @include('components.errors') --}}
            </div>
            {{-- <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Example file input</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </form> --}}
        </div>

    </div>

@endsection
