@extends('layouts/app')
@section('content')
<button   class="bg-[#F16B07] text-white p-2 h-11 rounded-xl w-28">
    <a href="/journals/create">Créer</a></button>
<div class="card">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Produit</th>
            <th scope="col">Production</th>
            <th scope="col">Vente</th>
            <th scope="col">Production Vendue </th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach($journals as $journal) 
                <tr>
                    <td>{{$journal->id}}</td>
                    <td>{{$journal->production}}</td>
                    <td>{{$journal->vente}}</td>
                    <td>{{$journal->productionVendue}}</td>
                    <td>{{$journal->Description}}</td>
                    <td><a href="/journals/{{$journal->id}}/edit" class="btn btn-secondary">Modifier</a></td>
                    <td>{!! Form::open(['action' => ['\App\Http\Controllers\JournalsController@destroy', $journal->id], 'method' => 'POST']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



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