@extends('layouts.app')

@section('title', 'Cervecerías')

@section('content')



<h1>Listado de Cervecerías</h1>

<div id="map" class="mb-4" style="height: 400px">
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
crossorigin=""></script>
    <script>
        var map = L.map('map').setView([40.853419,-1.1013743], 7);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    </script>
</div>

<x-msgflash />

<div class="d-flex justify-content-center my-4">
<a href="{{ route('breweries.create') }}" class="btn btn-warning">Nueva cervecería</a>
</div>

<div class="row d-flex justify-content-between">
    @foreach ( $breweries as $brewery )


<x-card name="{!! $brewery->name !!}" 
    place="{{ $brewery->place }}"
    description="{{ $brewery->description }}"
    classCard="col-sm-4"
    urlView="{{ route('breweries.show', $brewery->id) }}">

    <x-slot:urlImg>
        @if(isset($brewery->img) && ($brewery->img != ''))
        {{ $brewery->img }}
    @else
        {{ asset('img/default.jpg') }}
    @endif
    </x-slot:urlImg>
</x-card>

<script>
L.marker([{{ $brewery->latitude }}, {{ $brewery->longitude }}]).addTo(map)
</script>

    @endforeach
</div>

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
crossorigin="">
</script>


@endsection
