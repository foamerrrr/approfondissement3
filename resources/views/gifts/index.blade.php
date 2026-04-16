@extends('layouts.app')

@section('content')
<h1>Liste des cadeaux</h1>

@if($gifts->isEmpty())
    <p>Aucun cadeau</p>
@else
    @foreach($gifts as $gift)
        <p>
            {{ $gift->name }} - {{ $gift->price }} €

            <a href="{{ route('gifts.show', $gift) }}">Voir</a>
            <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>

            <form action="{{ route('gifts.destroy', $gift) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </p>
    @endforeach
@endif
@endsection