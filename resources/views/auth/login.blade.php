<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite('resources/css/app.css')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<!-- 

    <div id="app">
      <main class="py-4">
            

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            

            <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
        </main>
    </div>
     -->
     <div class="flex h-screen items-center justify-center">

<div class=" w-[480px] h-[643px]  rounded-l-lg shadow--2xl bg-[#da6307] ">
  <img class="h-full rounded-l-lg " src="/assets/CaCo33.png" alt="#">
</div>

<div class=" w-[480px] h-[643px] shadow-2xl rounded-r-lg ">
      <center>
      <br>
      <br>
      
        <img src="{{ asset('/assets/logo.png') }}" alt="#">
        <br>
        <br>
        <br>
        <h1 class="font-bold text-4xl">BONJOUR</h1><br><br>

      <div id="app">
      <main class="py-4">
        
          <form method="POST" action="{{ route('login') }}">
          <center>
            @csrf
            <div>
              
              {{ Form::email('email', old('email'), ['class' => ' w-[343px] h-[54px] rounded-[15px] shadow-2xl text-xl p-4', 'required', 'autocomplete' => 'email', 'autofocus','placeholder' => 'Email']) }}
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
                  <br>
                  {{ Form::password('password', ['class' => 'w-[343px] h-[54px] rounded-[15px] shadow-2xl text-xl p-4' . ($errors->has('password') ? ' is-invalid' : '') , 'required', 'autocomplete' => 'current-password', 'placeholder' => 'Password']) }}
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span> 
                  @enderror
                </div>
            {{-- <div>
              
                <input id="password" type="password" class="w-[343px] h-[54px] rounded-[15px] shadow-2xl text-xl p-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                @error('password')
                <span class="invalid-feedback" role="alert">
                  
                  <strong>{{ $message }}</strong>
                </span> 
                @enderror
</div> --}}

            
<br>
<br>

                

                <div class="row mb-3">
                  <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                          <input class="form-check-input right" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label left" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                      </div>
                  </div>
              </div>

              <button type="submit" class="bg-[#F16B07] text-white w-[293px] h-[59px] flex items-center justify-center rounded-[17px] text-2xl">
                {{ __('Login') }}
              </button>

                      @if (Route::has('password.request'))
                          <a class="btn btn-link text-black   " href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
</center>
          </form>
        </div>
        </main>
    </div>
      </center>
</div>

</div>
</body>
</html>
