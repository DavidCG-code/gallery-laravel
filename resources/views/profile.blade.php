@extends('templates.app')

@section('content')
@include('templates.partials.menu')

  
  <div class="profile">
    <div>
      <h2>{{Auth::user()->name}}</h2>
    </div>

    <div id="options" class="profile__options">
      <img src="{{ asset('./images/options.svg') }}" alt="">


      <div id="optionsMenu" class="none">
      
        <ul class="profile__list radius">  
          <li class=" profile__list__items profile__list__items--color ">
            <a href="{{route('logout')}}" class="profile__list__items--txt-danger" >Logout</a>
          </li>
          <li class=" profile__list__items profile__list__items--danger ">
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
        @if (Auth::user()->avatar == null)
          <figure class="forms__box--avatar">
            <img src="{{asset('./images/avatar.svg')}}" id="preview"  alt="pepe">
          </figure>
        @else
          <figure class="forms__box--avatar">
            <img src="{{asset('./storage/images/'. Auth::user()->avatar)}}" id="preview"  alt="pepe">
          </figure>
        @endif


        
        <label for="avatar" class="forms__box--button__avatar">New Image</label>
        <input type="file" id="avatar"  name="avatar" class="none">
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
        <input type="submit" class="button button--update" name="update" value="Save">
      </div>
    </form>

  </div>

@endsection
