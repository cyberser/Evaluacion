@extends('layout.master')
@section('title', 'Contact')

@section('seccion')

<style>
	.formulario{
		width: 300px;
		height: auto;
		text-align: center;
		background-color: orange;
		margin: auto;


	}
	input, textarea{
		width: 250px;
	}
	.con{
		text-align: center;
	}


</style>

<div class="con">
<h1>Contacto</h1>
<p>Envianos un correo electronico</p>
</div>
<form action="{{route('contacto.store')}}" method="post" class="formulario">

	@csrf
	
	<label>Nombre
		<input type="text" name="nombre" value="{{old('nombre')}}">
	</label>
	
	<br>
	@error('nombre')
	<small>{{$message}}</small>
	@enderror
	<br>
	
	<label>Correo
		<input type="eamil" name="correo" value="{{old('correo')}}">
	</label>
	<br>
	@error('correo')
	<small>{{$message}}</small>
	@enderror
	<br>
	<label>Mensaje
		<textarea name="mensaje" rows="4">{{old('mensaje')}}</textarea>
	</label>
	<br>
	@error('mensaje')
	<small>{{$message}}</small>
	@enderror
	<br>
	<button type="submit">Enviar Mensaje</button>
</form>
@endsection