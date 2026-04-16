@extends('layouts.app')

<h1>Modifier un cadeau</h1>

<form method="POST" action="{{ route('gifts.update', $gift) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ old('name', $gift->name) }}"><br>

    <input type="text" name="url" value="{{ old('url', $gift->url) }}"><br>

    <textarea name="details" value="{{ old('details', $gift->details) }}"> </textarea><br>

    <input type="text" name="price" value="{{ old('price', $gift->price) }}"><br>

    <button type="submit">Modifier</button>
</form>

@endsection