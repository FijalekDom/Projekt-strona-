<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pizzeria</title>
    <link rel="stylesheet" href="css/style_zalogowany.css" />
    <link rel="stylesheet" href="css/formularz.css" />
    <link rel="stylesheet" href="css/tabela.css" />
</head>
<body>
<header>
    <h1>Pizzeria</h1>
    <nav>
        <ul id="nav">
            <li><a href="{{ route('home') }}">Informacje</a></li>
            <li><a href="{{ route('home.oferta') }}">Oferta</a></li>
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
                <li><a href="{{ route('home.zamow') }}">Zamów&nbsp;pizze</a></li>
                <li><a href="{{ route('home.o_mnie') }}">O&nbsp;mnie</a></li>
                <li><a href="{{ route('home.moje_zamowienia') }}">Moje&nbsp;zamówienia</a></li>

                <li>
                    <a>{{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Wyloguj&nbsp;się</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @endif
        </ul>
    </nav>
</header>
<section>
    @yield('content')
</section>
<footer>&copy;DF</footer>
</body>


