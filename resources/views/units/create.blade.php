@extends('layouts/app')
@section('content')
<h1>Add Unité</h1>  
<div class="flex items-center  justify-between">
   
    
    {!! Form::open(['action' => '\App\Http\Controllers\UnitsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data' ]) !!}
        <div class="form-group">
            {{Form::label('nomUnite', 'Nom Unite');}}
            {{Form::text('nomUnite', '', ['class'=>'form-control','placeholder'=>'Nom Unite']);}}
        </div>
        
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
            
            {{Form::text('responsable', '', ['class'=>'form-control','placeholder'=>'Responsable']);}}
        </div>
        <div class="form-group">
            {{Form::label('type', 'Type');}}
            <div id="editor"></div>
            
            {{Form::text('type', '', ['class'=>'form-control','placeholder'=>'Type']);}}
        </div>
            {{Form::submit('Submit',['class' => 'bg-[#F16B07] text-white p-2 h-11 rounded-xl w-28'])}}
    {!! Form::close() !!}
</div>
@endsection

