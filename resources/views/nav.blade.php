<nav>
    <a href="{{route('countries-index')}}">Countries</a><br>
    <a href="{{route('hotels-index')}}">Hotels</a>
    @if( Auth::user()->role < 9) 
    <br>ORDERS
    @endif
    <hr>
</nav>