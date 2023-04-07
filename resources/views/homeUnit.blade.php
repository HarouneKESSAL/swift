@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/units/create" class="btn btn-primary">Add Post</a>
                    <hr>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>Title</th>  
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                @foreach($posts as $post) 
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                        <td>{!! Form::open(['action' => ['\App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}</td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection
