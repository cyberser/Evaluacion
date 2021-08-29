@extends('layout.master')
@section('title', 'Editar')

@section('seccion')
<h1>Aca podras Editar un blog</h1>


<form action="{{route('blog.update', $blog)}}" method="post">

	@csrf

	@method('put')

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Autor</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="autor" value="{{old('autor', $blog->autor)}}">
</div>

	@error('autor')
<br>
<small>*{{$message}}</small>
<br>

	@enderror
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titulo</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="{{old('titulo', $blog->titulo)}}">
</div>

	@error('titulo')
<br>
<small>*{{$message}}</small>
<br>

	@enderror
<br>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Contenido</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="contenido">{{old('contenido', $blog->contenido)}}</textarea>
</div>


	@error('contenido')
<br>
<small>*{{$message}}</small>
<br>

	@enderror

<br>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Resumen</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="resumen">{{old('resumen', $blog->resumen )}}</textarea>
</div>
	@error('resumen')
<br>
<small>*{{$message}}</small>
<br>

	@enderror
	<br>
<br>
	<button type="submit">Actualizar blog</button>
	<br>
</form>
@endsection