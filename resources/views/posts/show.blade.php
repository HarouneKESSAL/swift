@extends('layouts/app')
@section('content')
<br>
    <a href="/posts" class="btn btn-primary ">Go Back</a>
    <br><br><br>
    <h1>{{$post->title}} :</h1>
    <br>
            <div class="well"> 
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 90%" src="/storage/cover_image/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{ $post-> title }}</a></h3> 
                        <small>Written on {{$post-> created_at}} <u>By {{$post-> author}}</u></small><br>
                        <small class=" text-decoration-underline"> <i>Posted By {{$post->user->name}} </i></small>
                        <p>{{ $post-> body }}</p>
                    </div>
                </div>
            </div>
            <br>
            @if (!Auth::guest()) 
                @if (Auth::user()->id == $post->user_id) 
                    <div class="d-flex justify-content-between">
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                    
                        {!! Form::open(['action' => ['\App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {!! Form::close() !!}
                    </div>
                @endif
            @endif
            

@endsection