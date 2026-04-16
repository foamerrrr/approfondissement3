@extends('layouts.app')

<h1>{{ $gift->name }}</h1>

<p>Prix : {{ $gift->price }} €</p>

@if($gift->url)
    <p><a href="{{ $gift->url }}">Voir le lien</a></p>
@endif

@if($gift->details)
    <p>{{ $gift->details }}</p>
@endif

<a href="{{ route('gifts.index') }}">Retour</a>

@endsection