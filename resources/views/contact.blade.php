@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<h1>Contactanos</h1>



<div class="d-flex justify-content-center">
    <div class="col-sm-6">

<x-msgflash />

<form method="POST" action="{{ route('contact.store') }}" class="needs-validation" novalidate>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
        <div id="nameHelp" class="form-text">Tu nombre completo</div>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">Tu email</div>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Comentario</label>
        <textarea class="form-control" id="message" name="message" aria-describedby="messageHelp" required></textarea>
        <div id="messageHelp" class="form-text">Tu sugerencia</div>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="privacy" id="privacy" required>
        <label class="form-check-label" for="privacy">Politica de privacidad</label>
        <div class="valid-feedback">
            Correcto!
        </div>
        <div class="invalid-feedback">
            Obligatorio!
        </div>
    </div>

    <button type="submit" class="btn btn-warning">Enviar</button>
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
