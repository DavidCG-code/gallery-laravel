<nav class="fixed-menu">
  <ul class="menu">
    <li class="menu__icons">
      <a href="{{ route('home') }}">
        <img src="{{asset('./images/home.svg')}}" alt="Home - Inicio">
      </a>
    </li>
    <span>|</span>

    <li  class="menu__icons">
      <a href="#" >
        <img src="{{asset('./images/search.svg')}}" alt="Search - Buscar">
      </a>
      
    </li> 

    <span>|</span>

    <li class="menu__icons">
      <a href="{{ Auth::user() ? route('preview', Auth::user()->id) : route('loginView') }}">
        <img src="{{asset('./images/plus.svg')}}" alt="Add - Añadir">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="{{ Auth::user() ? route('profile', Auth::user()->id) : route('loginView') }}">
        @if ( Auth::user() )

          @if (Auth::user()->avatar === null)
            <div class="menu__icons__avatar">
              <p>{{\substr(Auth::user()->name, 0,1)}}</p>
            </div>
          @else
            <figure class="menu__icons__avatar">
              <img src="{{asset('./storage/images/'. Auth::user()->avatar)}}" alt="Avatar Image">
            </figure>
          @endif

        @else
          <a href="{{ route('loginView') }}"><img src="{{asset('./images/user.svg')}}" alt="Add - Añadir"></a>
        @endif
        
      </a>
    </li>
  </ul>
</nav>

