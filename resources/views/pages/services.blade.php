@extends('layouts.app')
@section('content')
    <h1>Services</h1>
    <p>this is the Services page</p>
    @if (count($services) > 0)
    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item">{{ $service }}</li>    
        @endforeach
    </ul>
    @endif
    
@endsection
        
        