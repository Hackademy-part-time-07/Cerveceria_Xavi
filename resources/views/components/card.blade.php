@isset($classCard)
<div class={{ $classCard }}>
@else
<div class="col-sm-6">
@endisset

    <div class="card col-m-3 mb-4 w-100">
            <img src="{{ $urlImg }}" class="card-img-top" alt="{{ $name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $name }}</h5>
                <p class="card-text">{{ $place }}</p>
                @isset($urlView)
                <a href="{{ $urlView }}" class="btn btn-primary">Ver más!</a>
                @endisset
            </div>
    </div>
</div>
@isset($urlBack)
<div class="text-center">
    <a href="{{ $urlBack }}" class="btn btn-primary"> Volver</a>
</div>
@endisset

