@extends('layouts.app')

@section('title', $brewery->name)

@section('content')
<h1>Detalle de Cervecería</h1>

<div class="row d-flex justify-content-center">

    <x-card name="{!! $brewery->name !!}" 
        place="{!! $brewery->place !!}"
        description="{!! $brewery->description !!}"
        urlBack="{{ route('breweries') }}"
        map="S"
        lat="{{ $brewery->latitude }}"
        long="{{ $brewery->longitude }}">

        <x-slot:urlImg>
            @if(isset($brewery->img) && ($brewery->img != ''))
                {{ $brewery->img }}
            @else
                {{ asset('img/default.jpg') }}
            @endif
        </x-slot:urlImg>

        @if ((null !== Auth::user()) && $brewery->author == Auth::user()->id)
            <x-slot:urlEdit>{{ route('breweries.edit', $brewery->id) }}</x-slot:urlEdit>
            <x-slot:urlDelete>{{ route('breweries.delete', $brewery->id) }}</x-slot:urlDelete>
        @endif
        



        
</x-card>

</div>

@endsection
