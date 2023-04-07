@extends('layouts.app')


@section('content')
<li class="text-white text-xl bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/units/index">Gérer les unités</a>
</li>
<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/admin/Gere_les_controles_de_gestion">Gérer les <br>
    Contrôles de gestion</a>
</li>
<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/admin/Gere_Direction">Gérer les Directions</a>
</li>
<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/admin/Gere_les_produit">Gérer les produits</a>
</li>

<li class="text-white text-xl hover:bg-[#F16B07] h-20 flex justify-center items-center mt-1">
  <a href="/admin/Gere_les_familles">Gérer les familles</a>
</li>
@endsection