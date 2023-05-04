@extends('layouts.app')

@section('title', 'Cervecerías')

@section('content')



<h1>Listado de Cervecerías</h1>
<div class="row d-flex justify-content-between">

    @foreach ( $breweries as $brewery )


    <x-card name="{!! $brewery['nombre'] !!}" 
    place="{{ $brewery['poblacion'] }}"
    urlImg="{{ asset('img/default.jpg') }}" 
    classCard="col-sm-4"
    urlView="{{ route('brewery', $brewery['id']) }}">
</x-card>

    @endforeach
</div>


@endsection
