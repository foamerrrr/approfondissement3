<h1>Ajouter un cadeau</h1>

<form method="POST" action="{{ route('gifts.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Nom"><br>

    <input type="text" name="url" placeholder="URL"><br>

    <textarea name="details" placeholder="Détails"></textarea><br>

    <input type="text" name="price" placeholder="Prix"><br>

    <button type="submit">Créer</button>
</form>

<a href="{{ route('gifts.index') }}">Retour</a> 