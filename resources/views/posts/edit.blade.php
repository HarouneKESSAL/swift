@extends('layouts/app')
@section('content')
    <h1>Edit Post</h1>
    
    {!! Form::open(['action' => ['\App\Http\Controllers\PostsController@update',$post->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title');}}
            {{Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Title']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('author', 'Author');}}
            {{Form::text('author', $post->author, ['class'=>'form-control','placeholder'=>'Author']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('body', 'Body');}}
            <div id="editor"></div>
            
            {{Form::textarea('body', $post->body, ['class'=>'form-control','placeholder'=>'Body Text']);}}
        </div>
        <br>
        <div class="form-froup ">
            {{Form::file('cover_image')}}
        </div>
        <br>
            {{Form::hidden('_method','PUT')}}    
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            
    {!! Form::close() !!}

@endsection

