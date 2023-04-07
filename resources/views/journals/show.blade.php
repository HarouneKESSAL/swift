@extends('layouts/app')
@section('content')
<br>
    <a href="/units" class="btn btn-primary ">Go Back</a>
    <br><br><br>
    {{-- <h1>{{$unit->nomUnite}} :</h1> --}}
    <br>
            <div class="well"> 
                <div class="row">
                    
                    <div class="col-md-8 col-sm-8">
                    {{$unit->id}}
                    {{$unit->nomUnite}}
                    {{$unit->adresse}}
                    {{$unit->responsable}}
                    {{$unit->type}}
                    </div>
                </div>
            </div>
            <br>
            @if (!Auth::guest()) 
                @if (Auth::user()->id == $post->user_id) 
                    <div class="d-flex justify-content-between">
                        <a href="/units/{{$unit->id}}/edit" class="btn btn-primary">Edit</a>
                    
                        {!! Form::open(['action' => ['\App\Http\Controllers\UnitsController@destroy', $post->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {!! Form::close() !!}
                    </div>
                @endif
            @endif
            

@endsection