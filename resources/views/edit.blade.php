@extends('templates.app')

@section('content')

<form action="{{ route('edit',Auth::user()->id) }}" method="POST"  enctype="multipart/form-data" class="forms">
  {{ csrf_field() }}
  @method('PUT')

    <input type="text" name="name" value="{{ Auth::user()->name}}">
    <input type="text" name="email" value="{{ Auth::user()->email}}">


    <input type="submit" name="update" value="Editar">
</form>

   
@endsection

