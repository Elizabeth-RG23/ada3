<!DOCTYPE html>
<html>
<head>
	<h1>Frameworks del lado del servidor: Laravel</h1>
	<title>@yield('title','ADA3')</title>
	<style>
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li class="{{ request()->routeIs('link') ? 'active' : ''}}"><a href="/link">Github</a></li>
			<li class="{{ request()->routeIs('instrucciones') ? 'active' : ''}}"><a href="/instrucciones">Instrucciones</a></li>
			<li class="{{ request()->routeIs('formulario') ? 'active' : ''}}"><a href="/formulario">Formulario</a></li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>