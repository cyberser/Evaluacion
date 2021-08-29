@extends('layout.master')
@section('title', 'blog')

@section('seccion')

<h1>Bienvenido al blog</h1>
<br>
<p>Elige un blog para ver su contenido</p>
<br>



<ul class="list-group">
	
	@foreach($blogs as $blog)
	<li class="list-group-item"><a href="{{route('blog.show', $blog->id)}}">{{$blog->titulo}}</a></li>
 	@endforeach

</ul>
<br>
<button class="btn btn-warning"><a href="{{route('blog.create')}}">Crear un blog</a></button>


@endsection
