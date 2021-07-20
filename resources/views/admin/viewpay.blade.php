@extends('layouts.addmin')
@section('content')
@if (Auth::user()->hasRole('developer'))
    <div class="container">
        <h2>ข้อมูลลูกค้า</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="cs-p-1">Name</th>
                        <th class="cs-p-1">URL</th>
                    </tr>
                </thead>
        
                @forelse($images as $image)
                    <tr>
                        <td class="cs-p-1">{{ $image->name }}</td>
                        <td class="cs-p-1"><a href="{{ $image->url }}">View Image</a></td>
                    </tr>
                    @empty
                    <p>No Images at the moment</p>
                @endforelse
            </table>
        </div>
    </div>
    @endif
@endsection

