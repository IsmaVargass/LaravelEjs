<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon">
    <title>@yield('title', 'Bienvenidos a Laravel, TAD')</title>
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    {{-- Incluimos el header partial, sin <html> ni <head>, solo el bloque <header> --}}
    @include('layouts.header')

    <main class="container my-5">
        {{-- Aquí va el título de la página, si no se define, usa el predeterminado --}}
        {{-- Este es el hueco donde “incrustarás” cada contenido específico --}}
        @yield('content')
    </main>

    {{-- Incluimos el footer partial, igual: solo el bloque <footer> --}}
    @include('layouts.footer')
</body>
</html>
