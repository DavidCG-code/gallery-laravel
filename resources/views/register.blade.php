@extends('templates.app')

@section('content')

  <div class="form-title">
    <h1>Gallery Laravel</h1>
  </div>

  <div class="container-forms">
    <form action="{{ route('register') }}" method="POST"  enctype="multipart/form-data" class="forms">
      @csrf

      <div class="forms__box">
        <figure class="forms__box--avatar">
          <img src="{{asset('./images/avatar.svg')}}" id="registerPreview"  alt="pepe">
        </figure>

        <label for="register" class="forms__box--button__avatar">Añadir</label>
        <input type="file" id="register" name="avatar" class="none"> 
      </div>

      <div class="forms__box forms__box--test">
        <label for="name"  class="forms__box--label">Username</label>
        <input type="text" class="forms__box--input" name="name" placeholder="Username">
      </div>

      <div class="forms__box">
          <label for="password"  class="forms__box--label">Password:</label>
          <input type="password" class="forms__box--input" name="password" placeholder="password">
      </div>
      <div class="forms__box">
        <label for="email"  class="forms__box--label">Email:</label>
        <input type="email" class="forms__box--input" name="email" placeholder="email@email.com">
      </div>
      <div class="forms__btn">
        <input type="submit" class="button button--update" name="update" value="Guardar">
      </div>
    </form>
      
@endsection