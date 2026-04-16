<h1>Modifier un cadeau</h1>

<form method="POST" action="{{ route('gifts.update', $gift) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $gift->name }}"><br>

    <input type="text" name="url" value="{{ $gift->url }}"><br>

    <textarea name="details">{{ $gift->details }}</textarea><br>

    <input type="text" name="price" value="{{ $gift->price }}"><br>

    <button type="submit">Modifier</button>
</form>