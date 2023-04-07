@extends('layouts/app')
@section('content')
    <h1>Users   </h1>
    @if (count($users) > 0)
        @foreach ($users as $user )
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}">
                    </div>
                    <div class="p-4">
                        <h2 class="text-2xl font-semibold mb-4">Mon profil</h2>
                        <p class="mb-2"><strong>Nom:</strong> {{ $user->name }}</p>
                        <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>
                        @if(! $user ->isAdmin())
                        <button class="btn btn-success btn-sm">Make Admin</button>
                        @endif  
                        <p class="mb-2"><strong>Date d'inscription:</strong> {{ $user->created_at->format('d/m/Y') }}</p>
                        <p class="mb-2"><strong>Dernière connexion:</strong> {{ $user->last_login_at->format('d/m/Y H:i:s') }}</p>
                  
                </div> 
                    
                </div>
                
            </div>
        @endforeach
        <br>
        
            {{ $user->onEachSide(5)->links() }}
        
        <br>
    @else
        <p>No tities today</p>
    @endif
@endsection







@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">My Profile</div>
        <div class="card-body">
            @if(session('status'))
                <div class="btn btn-success btn-sm">{{session('status')}}</div>
            @endif  
            {{-- <form method="POST" action="{{ route('users.update') }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', auth()->user()->name) }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form> --}}
        </div>
    </div>
@endsection
