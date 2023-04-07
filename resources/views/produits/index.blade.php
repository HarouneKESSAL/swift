@extends('layouts/app')
@section('content')
<button   class="bg-[#F16B07] text-white p-2 h-11 rounded-xl w-28">
    <a href="/produits/create">Créer</a></button>
<div class="card">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom Unite</th>
            <th scope="col">Adresse</th>
            <th scope="col">Responsable </th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody>
            @foreach($produits as $unit) 
                <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->name}}</td>
                    
                    <td><a href="/produits/{{$unit->id}}/edit" class="btn btn-secondary">Modifier</a></td>
                    <td>{!! Form::open(['action' => ['\App\Http\Controllers\ProduitsController@destroy', $unit->id], 'method' => 'POST']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach
          </tbody>
    </table>
    <br>
    
    

<br>
</div>

@endsection














<!-- Large modal -->


{{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          
            <div class=" card col-8 offset-2 my-2 p-3">
          <form>
            <div class="form-group">
              <label for="listname">List name</label>
              <input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
            </div>
            <div class="form-group">
              <label for="datepicker">Deadline</label>
              <input  type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pick up a date">
            </div>
            <div class="form-group">
                                    <label for="datepicker">Add a list item</label>
                <div class="input-group">

                  <input type="text" class="form-control" placeholder="Add an item" aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
           <div class="form-group text-center">
             <button type="submit" class="btn btn-block btn-primary">Sign in</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div> --}}