<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<nav>
    <!-- Lijevo: logo i tekst -->
    <a href="{{ url('/') }}" class="logo">
        <img src="{{ asset('images/favicon.png') }}" alt="Logo" style="    width: 10%; 
    height: 10%;
    border-radius: 50%;">
        <p class="logo-text">MANCHESTER CITY</p>
    </a>

    <!-- Desno: meni -->
    <ul>
        <li><a href="{{ url('/about') }}">About Us</a></li>
        <li><a href="{{ url('/fixtures') }}">Fixtures</a></li>
    </ul>
</nav>
