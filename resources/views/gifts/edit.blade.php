@extends('layouts.app')

@section('content')
<h1>Modifier un cadeau</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('gifts.update', $gift) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Nom :</label><br>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name', $gift->name) }}"
        >

        @error('name')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <br>

    <div>
        <label for="url">URL :</label><br>
        <input 
            type="text" 
            id="url" 
            name="url" 
            value="{{ old('url', $gift->url) }}"
        >

        @error('url')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <br>

    <div>
        <label for="details">Détails :</label><br>
        <textarea 
            id="details" 
            name="details"
        >{{ old('details', $gift->details) }}</textarea>

        @error('details')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <br>

    <div>
        <label for="price">Prix :</label><br>
        <input 
            type="text" 
            id="price" 
            name="price" 
            value="{{ old('price', $gift->price) }}"
        >

        @error('price')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <br>

    <button type="submit">Modifier</button>
</form>
@endsection