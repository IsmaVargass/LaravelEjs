@extends('app')

{{-- Le das un título único a esta página --}}
@section('title', 'Ejercicio 1 - Mi Laravel')

{{-- Todo lo que pongas aquí aparecerá en @yield('content') --}}
@section('content')
    <h1>Ejercicio 1</h1>
    <p>Este es el contenido del ejercicio 1.</p>
    <p>Utiliza este espacio para practicar con Blade y Laravel.</p>
@endsection