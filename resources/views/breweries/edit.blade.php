@extends('layouts.app')

@section('title', 'Modificar cervecería')

@section('content')

<h1>Modificar cervecería</h1>



<div class="d-flex justify-content-center">
    <div class="col-sm-6">

<x-msgflash />

<form method="POST" action="{{ route('breweries.update', $brewery->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{ $brewery->name }}" required>
        <div id="nameHelp" class="form-text">Nombre de la cervecería</div>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>


    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description" aria-describedby="messageHelp" required>{{ $brewery->description }}</textarea>
        <div id="messageHelp" class="form-text">Describenos tu cervecería</div>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3">
        <label for="place" class="form-label">Localidad</label>
        <input type="text" class="form-control" id="place" name="place" aria-describedby="nameHelp" value="{{ $brewery->place }}" required>
        <div id="nameHelp" class="form-text">Donde esta tu cervecería</div>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3">
        <label for="longitude" class="form-label">Longitud</label>
        <input type="number" class="form-control" id="longitude" name="longitude" step="0.0001" value="{{ $brewery->longitude }}" required>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3">
        <label for="latitude" class="form-label">Latitud</label>
        <input type="number" class="form-control" id="latitude" name="latitude" step="0.0001" value="{{ $brewery->latitude }}" required>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3">
        <label for="img" class="form-label">Imagen</label>
        <input type="file" class="form-control" id="img" name="img">
    </div>



    <button type="submit" class="btn btn-warning">Guardar</button>
</form>
</div>
</div>
<script>

( function () {
    'use strict'


    const forms = document.querySelectorAll('.needs-validation')

    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()
</script>


@endsection
