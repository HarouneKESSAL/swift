@extends('layouts/app')
@section('content')
    <h1>Edit Post</h1>
    
    {!! Form::open(['action' => ['\App\Http\Controllers\UnitsController@update',$unit->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nomUnite', 'nomUnite');}}
            {{Form::text('nomUnite', $unit->nomUnite, ['class'=>'form-control','placeholder'=>'nomUnite']);}}
        </div>
        <br>
        <div class="form-group">
            {{Form::label('adresse', 'Adresse');}}
            {{Form::text('adresse', '', ['class'=>'form-control','placeholder'=>'Adresse']);}}
        </div>
        
        <div class="form-group">
            {{Form::label('ville', 'Ville');}}
            <div id="editor"></div>
            
            {{Form::text('ville', '', ['class'=>'form-control','placeholder'=>'Ville']);}}
        </div>
        
        <div class="form-group">
            {{Form::label('codePostal', 'Code Postal');}}
            <div id="editor"></div>
            
            {{Form::text('codePostal', '', ['class'=>'form-control','placeholder'=>'Code Postal']);}}
        </div>
        
        <div class="form-group">
            {{Form::label('responsable', 'Responsable');}}
            <div id="editor"></div>
            
            {{Form::text('responsable', '', ['class'=>'form-control','placeholder'=>'responsable']);}}
        </div>
        <div class="form-group">
            {{Form::label('type', 'Type');}}
            <div id="editor"></div>
            
            {{Form::text('type', '', ['class'=>'form-control','placeholder'=>'Type']);}}
        </div>
        <br>
       
        <br>
            {{Form::hidden('_method','PUT')}}    
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
            
    {!! Form::close() !!}

@endsection

