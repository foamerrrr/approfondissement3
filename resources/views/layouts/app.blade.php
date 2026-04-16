<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Gestion des cadeaux</title>
</head>
<body>

<nav>
    <a href="{{ route('gifts.index') }}">Accueil</a> |
    <a href="{{ route('gifts.create') }}">Ajouter un cadeau</a>
</nav>

<hr>

<main>
    @yield('content')
</main>

</body>
</html>