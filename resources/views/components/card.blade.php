@isset($classCard)
<div class={{ $classCard }}>
@else
<div class="col-sm-6">
@endisset

    <div class="card col-m-3 mb-4 w-100">

        
 
        @isset($urlImg)
        <img src="{{ $urlImg }}" class="card-img-top" alt="{{ $name }}">
        @else
        @isset($map)
        <div id="map" class="card-img-top" style="height: 250px"></div>
        @endisset
        @endisset

            <div class="card-body">
                <h5 class="card-title">{{ $name }}</h5>
                @isset($place)
                <p class="card-text">{{ $place }}</p>
                @endisset

                @isset($description)
                <p class="card-text">{{ $description }}</p>
                @endisset
            <div class="d-flex justify-content-around my-5">
                @isset($urlEdit)
                    <a href="{{ $urlEdit }}" class="btn btn-secondary">Modificar</a>
                @endisset

                @isset($urlDelete)
                <form method="POST" action="{{ $urlDelete }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>

                </form>
                @endisset
                

                @isset($urlView)
                <a href="{{ $urlView }}" class="btn btn-primary">Ver más!</a>
                @endisset
            </div>
            
                @if (isset($map) && isset($urlImg))
            <div id="map" class="card-img-top" style="height: 250px"></div>
            @endif
                
            </div>
            
    </div>
</div>

@isset($urlBack)
<div class="text-center">
    <a href="{{ $urlBack }}" class="btn btn-primary"> Volver</a>
</div>
@endisset

@isset($map)
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
crossorigin=""></script>

<script>
    var map = L.map('map').setView([{{ $lat }}, {{ $long }}], 16);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,

    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

L.marker([{{ $lat }}, {{ $long }}]).addTo(map)


</script>

@endisset