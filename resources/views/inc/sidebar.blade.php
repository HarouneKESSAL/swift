 <div class="flex items-center ">
  <div class="w-[281px] h-screen  bg-[#3E3E3E] flex flex-col justify-between">
    <div class="pt-8 dropdown">
      <center>
        <button class="rounded-full w-24 h-24 border-4 border-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="{{ asset('/assets/me.jpeg') }}" alt="Image Trigger" class="rounded-full border-4 border-white w-full h-full object-cover">
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <ul>
              <li class="dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{Auth::user()->name}}
                </a>
                <a class="dropdown-item" href="/profile">Dashboard</a>
                
                <a class="dropdown-item" href="{{ route('profile')}}">{{ __('My Profile') }}</a>
                
              </li> 
            </ul>
        </div>
      </center>
    </div>
    
    <div  class=" h-full">
      <center>
          <ul class="">
            <br>
  
            <li class="text-white text-xl hover:bg-orange-500 h-20 flex justify-center items-center mt-1">
              <a href="/units">Gérer les unités</a>
            </li>
  
            <li class="text-white text-xl hover:bg-orange-500 h-20 flex justify-center items-center mt-1">
              <a href="/journals">Gérer les <br>Contrôles de gestion</a>
            </li>
  
            <li class="text-white text-xl hover:bg-orange-500 h-20 flex justify-center items-center mt-1">
              <a href="/admin/Gere_Direction">Gérer les Directions</a>
            </li>
  
            <li class="text-white text-xl hover:bg-orange-500 h-20 flex justify-center items-center mt-1">
              <a href="/admin/Gere_les_produits">Gérer les produits</a>
            </li>
            
            <li class="text-white text-xl hover:bg-orange-500 h-20 flex justify-center items-center mt-1">
              <a href="/admin/Gere_les_familles">Gérer les familles</a>
            </li>
            
          </ul>
          
         
      </center>
    </div>

    <div>
      <div class="bg-orange-500 flex justify-center items-center h-20 gap-4 text-white text-xl">
        <img src="/assets/Vector.png" alt="">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          {{ __('Déconnexion') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
    </div>
</div>

             



    

  </div>