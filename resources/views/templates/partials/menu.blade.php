<nav class="fixed-menu">
  <ul class="menu">
    <li class="menu__icons">
      <a href="{{ route('home') }}">
        <img src="{{asset('./images/home.svg')}}" alt="Home - Inicio">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="">
        <img src="{{asset('./images/search.svg')}}" alt="Search - Buscar">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="{{ Auth::user() ? route('upImage') : route('login') }}">
        <img src="{{asset('./images/plus.svg')}}" alt="Add - Añadir">
      </a>
    </li>
    <span>|</span>

    <li class="menu__icons">
      <a href="{{ Auth::user() ? route('profile') : route('login') }}">
        @if (Auth::user())
          <span>{{ Auth::user()->name }}</span>
        @else
          <a href="{{ route('login') }}"><img src="{{asset('./images/user.svg')}}" alt="Add - Añadir"></a>
        @endif
        
      </a>
    </li>
  </ul>
</nav>

