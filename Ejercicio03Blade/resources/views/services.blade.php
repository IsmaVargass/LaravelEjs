@extends('layouts.landing')

@section('title', 'Services')

@section('content')

<h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Description of Service 1')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content' , 'Lorem ipsum.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content' , 'Prueba Service 3.')
    @endcomponent
@endsection
