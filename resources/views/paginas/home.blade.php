@extends('layout.master')
@section('title', 'home')

@section('seccion')
<h1>Bienvenido al home</h1>
<br>
<button class="btn btn-warning"><a href="{{route('blog')}}">Blog</a></button>
<button class="btn btn-warning"><a href="{{route('contact')}}">Contacto</a></button>

@endsection