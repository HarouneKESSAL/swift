@extends('layouts/app')
@section('content')
    <h1>Add Post</h1>
    <div class="card">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Produit</th>
                
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                {!! Form::open(['action' => '\App\Http\Controllers\ProduitsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data' ]) !!}
                    <tr>
                        <td>
                            <div class="form-group row">
                                <label for="produit_id" class="col-md-4 col-form-label text-md-right">{{ __('Produit') }}</label>

                                <div class="col-md-6">
                                    <select id="produit_id" name="produit_id" class="form-control @error('produit_id') is-invalid @enderror" required>
                                        

                                        <option value="" > Select Produit </option>
                                      
                                        @foreach ($produits as $produit)
    <option value="{{ $produit->id }}" {{ old('produit_id') == $produit->id ? 'selected' : '' }}>{{ $produit->name }}</option>
@endforeach

                                      
                                    </select>

                                    @error('produit_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </td>
                        
                        
                        <td>
                            <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="absolute left-1320 top-303 w-35 h-54 flex items-center font-bold text-3xl leading-9 font-poppins tracking-wide text-black" type="button"> ...</button>
                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Description
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="form-group">
                                        
                                            <div id="editor"></div>
                                            
                                            {{Form::textarea('Description', '', ['class'=>'form-control','placeholder'=>'Description']);}}
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                                            <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const toggleModalButtons = document.querySelectorAll('[data-modal-toggle]');
                                const closeModalButtons = document.querySelectorAll('[data-modal-hide]');
                                const modal = document.getElementById('defaultModal');

                                toggleModalButtons.forEach(button => {
                                    button.addEventListener('click', () => {
                                        modal.classList.toggle('hidden');
                                    });
                                });

                                closeModalButtons.forEach(button => {
                                    button.addEventListener('click', () => {
                                        modal.classList.add('hidden');
                                    });
                                });
                            </script>
                        </td>
                        <td>
                            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                            {!! Form::close() !!}
                        </td>
                        
                    </tr>
                
            </tbody>
        </table>
    </div>
@endsection

