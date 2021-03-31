@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>ข้อมูลลูกค้า</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">PotName</th>
                    <th scope="col">Mac</th>
                    <th scope="col">Status</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pot_data as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->User }}</td>
                        <td>{{ $row->PotName }}</td>
                        <td>{{ $row->Mac }}</td>
                        <td>{{ $row->status }}</td>
                        <td> <a href="{{route('admin.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

