@extends('layouts.app')

@section('title', $brewery["nombre"])

@section('content')
<h1>Detalle de Cervecería</h1>

<div class="row d-flex justify-content-center">

    <x-card name="{!! $brewery['nombre'] !!}" 
        place="{{ $brewery['poblacion'] }}"
        urlImg="{{ asset('img/default.jpg') }}" 
        urlBack="{{ route('breweries') }}">
</x-card>

</div>

@endsection
