@extends('layout')

@section('title','Instrucciones')

@section('content')
	<h2>Instrucciones</h2>

	<ul>
		@forelse($instrucciones as $instruccionesItem)
			<li>{{ $instruccionesItem['title'] }}</li>
		@empty
			<li>No hay instrucciones para mostrar</li>
		@endforelse
	</ul>

@endsection