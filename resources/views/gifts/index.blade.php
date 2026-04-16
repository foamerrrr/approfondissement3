@if($gifts->isEmpty())
    <p>Aucun cadeau</p>
    <a href="{{ route('gifts.create') }}">Ajouter un cadeau</a>
@else
<h1>Liste des cadeaux</h1>
@foreach($gifts as $gift)
    <p>{{ $gift->name }} - {{ $gift->price }} €</p>

        <a href="{{ route('gifts.show', $gift) }}">Voir</a>
        <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>

        <form action="{{ route('gifts.destroy', $gift) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </p>
@endforeach
<a href="{{ route('gifts.create') }}">Ajouter un cadeau</a> 
@endif