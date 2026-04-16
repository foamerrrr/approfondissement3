@extends('layouts.app')

@section('content')
<h1>Ajouter un cadeau</h1>

@if ($errors->any())
    <div style="color:red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('gifts.store') }}">
    @csrf

    <div>
        <label for="name">Nom :</label><br>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}"
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
            value="{{ old('url') }}"
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
        >{{ old('details') }}</textarea>

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
            value="{{ old('price') }}"
        >

        @error('price')
            <div style="color:red;">{{ $message }}</div>
        @enderror
    </div>

    <br>

    <button type="submit">Créer</button>
</form>
@endsection