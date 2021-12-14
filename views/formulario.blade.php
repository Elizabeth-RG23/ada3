@extends('layout')

@section('title','Formulario')

@section('content')
	<h2>Formulario</h2>
	<h4>Escribe un nombre, por favor.</h4>

	<form method="POST" action="{{ route('formulario') }}">
		@csrf <!--Agregar siempre esta directiva en los formularios-->
		<input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}<br>

		<button>Enviar</button>
	</form>
@endsection