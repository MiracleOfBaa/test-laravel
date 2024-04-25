@extends('layouts.app')
@section('title', 'Titol de la pàgina')
@section('content')
    <h1 class="text-blue-600">Benvingut a la meva web!</h1>
    <h2 class="text-red-300">Laravel mola</h2>
    <h3 class="text-green-400">Vue.js també mola</h3>

    <p>Hola, {{ time() }}</p>

    @if($name == 'Joan')
        <p>Oh, ets en Joan!</p>
        @elseif ($name == 'Maria')
        <p>Oh, ets la Maria!</p>
        @else
        <p>Oh, no et conec!</p>
    @endif

    @isset($name)
        <p>La variable {{ $name }}</p>
    @endisset

    @empty($name)
        <p>La variable està buida</p>
    @endempty


@endsection