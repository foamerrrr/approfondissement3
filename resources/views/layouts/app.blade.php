<!DOCTYPE html>
<html>
<head>
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