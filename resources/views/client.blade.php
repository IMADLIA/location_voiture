<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/lo.png" type="image/x-icon">
    <title>Mon Espace</title>
</head>
<body>
<div class="container mx-auto">
    <!-- Logo du site -->
    <img src="/images/logo.png" alt="Logo du site" class="w-32 h-auto mx-auto mt-8">

    <!-- Barre de navigation -->
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="#" class="text-white px-4 py-2">Accueil</a>
                <a href="#" class="text-white px-4 py-2">Voitures disponibles</a>
                <a href="#" class="text-white px-4 py-2">Personnel</a>
                <a href="#" class="text-white px-4 py-2">Voitures demandées</a>
                <a href="#" class="text-white px-4 py-2">Réponses</a>
            </div>
            <div>
                @auth
                    <a href="#" class="text-white">{{ auth()->user()->name }}</a>
                    <a href="{{ route('logout') }}" class="text-white ml-4">Déconnexion</a>
                @else
                    <a href="{{ route('login') }}" class="text-white">Connexion</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="mt-8">
        <!-- Insérez ici le contenu principal de la page en fonction des liens de navigation -->
    </div>
</div>

</body>
</html>