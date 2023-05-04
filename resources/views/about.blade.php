@extends('layouts.app')

@section('title', 'Quienes somos')

@section('content')


<h1>Quienes somos</h1>
<div class="d-flex justify-content-center">

    <x-card name="Cervecerías SL" 
    urlImg="{{ asset('img/default.jpg') }}">
    <x-slot:place>
        Somos un portal de cervezerias de España y parte del extrangero.
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="tel:34666555444" target="_system" class="contacto">Telefono +34 666 555
                    444</a></li>
            <li class="list-group-item"><a href="mailto:cervezas@cervecerias.com" target="_system"
                    class="contacto">Email: cervezas@cervecerias.com</a></li>
            <li class="list-group-item"><a href="http://www.wa.me?34666555444" target="_system"
                    class="contacto">Whatsapp +34 666 555 444</a></li>
        </ul>
    </x-slot:place>

</x-card>

</div>

@endsection
