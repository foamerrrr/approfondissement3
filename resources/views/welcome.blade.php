@extends('layouts.app')

<h1> Liste des cadeaux </h1>

@foreach($gifts as $gift)
    <p>{{ $gift->name }} - {{ $gift->price }} €</p>

    @if($gift->url)
        <p><a href="{{ $gift->url }}">Voir le lien</a></p>
    @endif

    @if($gift->details)
        <p>{{ $gift->details }}</p>
    @endif
@endforeach

@endsection