@extends('templates.app')

@section('content')
@include('templates.partials.menu')

  
  <div class="profile">
    <div>
      <h2>{{Auth::user()->name}}</h2>
    </div>

    <div id="test" class="profile__options">
      <img src="{{ asset('./images/options.svg') }}" alt="">


      <div id="testing" class="none">
      
        <ul class="profile__list radius-lf-t radius-lf-b">  
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

  
  <div class="container-forms">
    <form action="{{ route('update',Auth::user()->id) }}" method="POST"  enctype="multipart/form-data" class="forms">
      @csrf
      @method('PUT')

      <div class="forms__box">
        @if (Auth::user()->avatar === null)
          <figure class="profile__avatar">
            <p>{{ \substr(Auth::user()->name, 0,1) }}</p>
          </figure>
        @else
          <figure class="profile__avatar">
            <img src="{{asset('./storage/images/'. Auth::user()->avatar)}}" alt="Avatar Image">
          </figure>
        @endif
        <label for="avatar" class="button__avatar">Editar</label>
        <input type="file" id="avatar" name="avatar" class="none">
      </div>

      <div class="forms__box">
        <label for="name">Username:</label>
        <input type="text" name="name" value="{{Auth::user()->name}}">
      </div>

      <div class="forms__box">
          <label for="password">Password:</label>
          <input type="password" name="password" value="">
      </div>
      <div class="forms__box">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{Auth::user()->email}}">
      </div>
      <div class="forms__btn">
        <input type="submit" class="button button--update" name="update" value="Guardar">
      </div>
    </form>

@endsection
