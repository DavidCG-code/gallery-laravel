@extends('templates.app')

@section('content')

<div class="form-title">
  <h1>Gallery Laravel</h1>
</div>

<div class="container-forms">
  <form action="{{ route('logIn') }}" method="POST"  enctype="multipart/form-data" class="forms">
    {!! csrf_field() !!}
    <div class="forms__box">
      <label for="email" class="forms__box--label">Email:</label>
      <input type="email" class="forms__box--input" name="email" required placeholder="email@email.com">
    </div>
    <div class="forms__box">
        <label for="password" class="forms__box--label">Password:</label>
        <input type="password" class="forms__box--input" name="password" required placeholder="Password">
    </div>
  
    <div class="forms__btn">
      <input type="submit" class="button button--login" name="login" value="Login">

      <a href="{{ route('registerView') }}">Not Register? Do it</a>
    </div>
  </form>

  @error('errors')
      <div class="error">
        <p>{{$message}}</p>
      </div>
  @enderror
</div>

@endsection