<nav class="column two-small flow-navbar">
      <div class="item-center" style="font-size: 28px;">
      Nyhem
      </div>

      <div class="item-right item-center">
      
      <div class="dropdown">
      <a href="javascript:void(0);" onclick="myFunction(this)" class="dropbtn trigram" data-target="myDropdown">&#9776;</a>
      <div id="myDropdown" class="dropdown-content">

        @if (Auth::check())
        <a href="{{ route('home') }}">Hem</a>
        <a href="#">Mitt konto</a>
        <a href="{{route('logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logga ut...</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        @else
        <a href="#">Hjälp</a>
        <a href="{{route('register')}}">Skapa konto</a>
        <a href="/login">Logga in...</a>
        @endif

      </div>
      </div>


  </div>
  </nav>