@extends('templates.app')

@section('content')

<div class="profile">
  <div id="test" class="profile__options">
    <img src="{{ asset('./images/options.svg') }}" alt="">
  </div>

  <div id="testing" class="">
   
    <ul class="profile__list">  
  
      <li class=" profile__list__items profile__list__items--color">
        <a href="{{ route('edit', Auth::user()->id) }}">Editar perfil</a>
      </li>
      <li class=" profile__list__items profile__list__items--danger">
        <a href="{{route('logout')}}" >Cerrar</a>
      </li>
    </ul>
  </div>

</div>

    
@endsection