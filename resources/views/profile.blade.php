@extends('templates.app')

@section('content')


  
  <div class="profile">
    <div>
      <h2>{{Auth::user()->name}}</h2>
    </div>

    <div id="test" class="profile__options">
      <img src="{{ asset('./images/options.svg') }}" alt="">


      <div id="testing" class="none">
      
        <ul class="profile__list radius-lf-t radius-lf-b">  
      
          <li class=" profile__list__items profile__list__items--color radius-lf-t">
            <a href="{{ route('edit', Auth::user()->id) }}">Edit Profile</a>
          </li>
          <li class=" profile__list__items profile__list__items--color">
            <a href="{{route('logout')}}" class="profile__list__items--txt-danger" >Logout</a>
          </li>
          <li class=" profile__list__items profile__list__items--danger radius-lf-b">
            <p>Delete Account</p>
          </li>
        </ul>
      </div>
      
    </div>

  </div>


  <div>
    <H1>Hola buenos dias</H1>
  </div>


    
@endsection