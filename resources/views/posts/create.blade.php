@extends('layouts/app')
@section('content')
    <h1>Add Post</h1>
    
    {!! Form::open(['action' => '\App\Http\Controllers\PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data' ]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title');}}
            {{Form::text('title', '', ['class'=>'form-control','placeholder'=>'Title']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('author', 'Author');}}
            {{Form::text('author', '', ['class'=>'form-control','placeholder'=>'Author']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('body', 'Body');}}
            <div id="editor"></div>
            
            {{Form::textarea('body', '', ['class'=>'form-control','placeholder'=>'Body Text']);}}
        </div>
        <br>

        <div class="form-froup ">
            {{Form::file('cover_image')}}
        </div>
        <br>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection

