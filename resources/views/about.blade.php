@extends('layouts.app')

@section('title', 'Quienes somos')

@section('content')


<h1>Quienes somos</h1>
<div class="d-flex justify-content-center">
    <div class="card col-md-6">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Cervecerías SL</h5>
            <p class="card-text">Somos un portal de cervezerias de España y parte del extrangero.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="tel:34666555444" target="_system" class="contacto">Telefono +34 666 555
                    444</a></li>
            <li class="list-group-item"><a href="mailto:cervezas@cervecerias.com" target="_system"
                    class="contacto">Email: cervezas@cervecerias.com</a></li>
            <li class="list-group-item"><a href="http://www.wa.me?34666555444" target="_system"
                    class="contacto">Whatsapp +34 666 555 444</a></li>
        </ul>

    </div>
</div>

@endsection
