@extends('templates.app')

@section('content')

  <div class="form-title">
    <h1>Gallery Laravel</h1>
  </div>

  <div class="container-forms">
    <form action="{{ route('register') }}" method="POST"  enctype="multipart/form-data" class="forms">
      @csrf

      <div class="forms__box">

        <label for="avatar" class="button__avatar">Añadir</label>
        <input type="file" id="avatar" name="avatar" class="none">
      </div>

      <div class="forms__box">
        <label for="name">Username:</label>
        <input type="text" name="name" placeholder="Username">
      </div>

      <div class="forms__box">
          <label for="password">Password:</label>
          <input type="password" name="password" placeholder="password">
      </div>
      <div class="forms__box">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="email@email.com">
      </div>
      <div class="forms__btn">
        <input type="submit" class="button button--update" name="update" value="Guardar">
      </div>
    </form>
      
@endsection