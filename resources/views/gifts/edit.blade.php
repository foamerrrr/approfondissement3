@extends('layouts.app')

@section('content')
<h1>Modifier un cadeau</h1>

<form method="POST" action="{{ route('gifts.update', $gift) }}">
    @csrf
    @method('PUT')

    <label for="name">Nom :</label><br>
    <input type="text" name="name" value="{{ old('name', $gift->name) }}"><br>
    <label for="url">URL :</label><br>
    <input type="text" name="url" value="{{ old('url', $gift->url) }}"><br>
    <label for="details">Détails :</label><br>
    <textarea name="details" value="{{ old('details', $gift->details) }}"> {{ $gift->details }} </textarea><br>
    <label for="price">Prix :</label><br>
    <input type="text" name="price" value="{{ old('price', $gift->price) }}"><br>

    <button type="submit">Modifier</button>
</form>
@endsection