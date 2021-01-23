@extends('templates.app')

@section('content')
<form action="/login" method="POST"  enctype="multipart/form-data" class="forms">
  {{ csrf_field() }}
  <div class="forms__box">
    <label for="">Email:</label>
    <input type="email" name="email" required>
  </div>
  <div class="forms__box">
      <label for="">Password:</label>
      <input type="password" name="password" required>
  </div>

  <div class="forms__btn">
    <input type="submit" class="button" name="add" value="login">
  </div>
</form>

<span>NO estas registrado? Registrate</span>
@endsection