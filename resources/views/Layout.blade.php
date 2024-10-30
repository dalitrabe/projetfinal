<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Étudiants</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<div class="flex flex-col md:flex-row justify-between items-center p-4">
    <div class="w-24 h-24">
        <a href="#">
            <img src="#" alt="Logo">
        </a>
    </div>

    <ul class="flex flex-col md:flex-row items-center mb-3 md:mb-0">
        @auth
            <li class="md:mr-5 py-2 md:py-0">
                <a href="#" class="hover:text-green-400">Les missions</a>
            </li>
            <li class="md:mr-5 py-2 md:py-0">
                <a href="#" class="hover:text-green-400">Mes conversations</a>
            </li>
            <li class="md:mr-5 py-2 md:py-0">
                <a href="#" class="hover:text-green-400">Mon compte</a>
            </li>
            <li class="md:mr-5 py-2 md:py-0">
                <a href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                   class="hover:text-green-400">Se déconnecter</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @else
            <li class="md:mr-5 py-2 md:py-0">
                <a href="{{ route('login') }}" class="hover:text-green-400">Se connecter</a>
            </li>
            <li class="md:mr-5 py-2 md:py-0">
                <a href="{{ route('register') }}" class="hover:text-green-400">S'enregistrer</a>
            </li>
        @endauth
    </ul>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>
