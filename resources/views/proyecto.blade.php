@extends('app')

@section('title', 'Bienvenidos a Laravel, TAD - Proyecto')

{{-- Todo lo que pongas aquí aparecerá en @yield('content') --}}

@section('content')
    <h1>Estás en el proyecto número: {{ $numero }}</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit lacus, aliquam dignissim metus ullamcorper sapien duis nam posuere, platea velit volutpat pretium rutrum faucibus eleifend. Odio nullam proin sapien interdum per convallis a lobortis, ad facilisis libero sollicitudin gravida commodo condimentum sem fermentum, cum ultrices nibh aliquet mauris praesent congue. Ultrices iaculis vivamus sem neque fusce platea turpis fermentum etiam, arcu a facilisis semper parturient litora class magnis, laoreet sed quam molestie porttitor purus viverra curabitur.</p>
@endsection
