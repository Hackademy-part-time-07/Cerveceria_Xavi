@extends('layouts.app')

@section('title', 'Cervecerías')

@section('content')



<h1>Listado de Cervecerías</h1>
<div class="row d-flex justify-content-between">

    @foreach ( $breweries as $brewery )
    <div class="col-sm-4">
        <div class="card col-m-3 mb-4 w-100">
            <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="{{ $brewery["nombre"] }}">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $brewery["nombre"] }}</h5>
                <p class="card-text">{{ $brewery["poblacion"] }}</p>
                <a href="{{ route('brewery', $brewery["id"]) }}" class="btn btn-primary">Ver más!</a>
            </div>

        </div>
    </div>

    @endforeach
</div>


@endsection
