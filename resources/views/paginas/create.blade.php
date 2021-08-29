@extends('layout.master')
@section('title', 'Create')

@section('seccion')
<h1>Aca podras crer un blog</h1>


<form action="{{route('blog.store')}}" method="POST">

	@csrf

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Autor</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="autor" value="{{old('autor')}}">
</div>

	@error('autor')
<br>
<small>*{{$message}}</small>
<br>

	@enderror
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titulo</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="{{old('titulo')}}">
</div>

	@error('titulo')
<br>
<small>*{{$message}}</small>
<br>

	@enderror
<br>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Contenido</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="contenido">{{old('contenido')}}</textarea>
</div>


	@error('contenido')
<br>
<small>*{{$message}}</small>
<br>

	@enderror

<br>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Resumen</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="resumen">{{old('resumen')}}</textarea>
</div>
	@error('resumen')
<br>
<small>*{{$message}}</small>
<br>

	@enderror
	<br>
<br>
	<button type="submit">Enviar blog</button>
	<br>
</form>
@endsection