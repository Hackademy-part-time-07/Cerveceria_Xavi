@extends('layouts.app')

@section('title', $brewery["nombre"])

@section('content')

<h1>Detalle de Cervecería</h1>
<div class="row d-flex justify-content-center">
    <div class="col-sm-6">
        <div class="card col-m-3 mb-4 w-100">
            <img src="{{ asset('img/default.jpg') }}" class="card-img-top" alt="{{ $brewery["nombre"] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $brewery["nombre"] }}</h5>
                <p class="card-text">{{ $brewery["poblacion"] }}</p>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('breweries')}}" class="btn btn-primary"> Volver</a>
    </div>
</div>

@endsection
