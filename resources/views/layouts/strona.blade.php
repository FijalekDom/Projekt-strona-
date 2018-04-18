<!DOCTYPE html>
<html>
<head>
	<title>Pizzeria</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/formularz.css" />
	<link rel="stylesheet" href="css/tabela.css" />
</head>
<body>
<header>
	<h1>Pizzeria</h1>
	<nav>
		<ul id="nav">
			<li><a href="{{ route('index') }}">Informacje</a></li>
			<li><a href="{{ route('wyswietl_oferte') }}">Oferta</a></li>
			<li><a href="{{ route('addUser') }}" title="">Rejestracja</a></li>
			<li><a href="{{ route('login') }}" title="">Zaloguj&nbsp;się</a></li>
		</ul>
	</nav>
</header>
<section>
	@yield('content')
</section>
<footer>&copy;DF</footer>
</body>
</html>