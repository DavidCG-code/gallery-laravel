@extends('templates.app')

@section('content')

<div>
  <button id="test">Options</button>

  <div id="testing" class="box none">
    <ul>          
      <li>
        <button><a href="{{ route('edit', Auth::user()->id) }}">Editar perfil</a></button>
      </li>
      <li >
        <form action="{{route('logout')}}" method="POST">
          {{ csrf_field() }}
          
          <button class="bg-danger">Cerrar Sesión</button>
        </form>
      </li>
    </ul>
  </div>

</div>

    
@endsection