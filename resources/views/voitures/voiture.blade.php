<!-- resources/views/voitures/voitures.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/lo.png" type="image/x-icon">
    <title>Voitures</title>
    @vite('resources/css/app.css')
</head>
<body>
    

@include('header')
<div class="container mx-auto" >

    <h1 class="text-3xl font-bold mb-8"> </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Voiture 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <a href="{{ route('register') }}">
            <img class="w-full h-56 object-cover object-center" src="img/tug.jpeg" alt="Voiture 1">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Volkswagen Tiguan</h2>
                
                <p class="text-gray-600 mb-2">Prix par jour: 800 DHS</p>
            </div>
        </div>

        <!-- Voiture 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <a href="{{ route('register') }}">
            <img class="w-full h-56 object-cover object-center" src="img/duster.jpeg" alt="Voiture 2">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Dacia Duster</h2>
                <p class="text-gray-600 mb-2"></p>
                <p class="text-gray-600 mb-2">Prix par jour: 400 DHS</p>
            </div>
        </div>

        <!-- Ajoutez autant de voitures que nécessaire en suivant le même schéma -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <a href="{{ route('register') }}">
            <img class="w-full h-56 object-cover object-center" src="img/clio.jpeg" alt="Voiture 2">
            </a>
            <div class="p-4">
                
                <h2 class="text-xl font-semibold mb-2">Renault Clio</h2>
                <p class="text-gray-600 mb-2"></p>
                <p class="text-gray-600 mb-2">Prix par jour: 250 DHS</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <a href="{{ route('register') }}">
            <img class="w-full h-56 object-cover object-center" src="img/kadjar.webp" alt="Voiture 2">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Renault Kadjar</h2>
                <p class="text-gray-600 mb-2"></p>
                <p class="text-gray-600 mb-2">Prix par jour: 500 DHS</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <a href="{{ route('register') }}">
            <img class="w-full h-56 object-cover object-center" src="img/208.jpeg" alt="Voiture 2">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Peugeot 208</h2>
                <p class="text-gray-600 mb-2"></p>
                <p class="text-gray-600 mb-2">Prix par jour: 350 DHS</p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <a href="{{ route('register') }}">
            <img class="w-full h-56 object-cover object-center" src="img/stepway.jpeg" alt="Voiture 2">
            </a>
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">Dacia Stepway</h2>
                <p class="text-gray-600 mb-2"></p>
                <p class="text-gray-600 mb-2">Prix par jour: 300 DHS</p>
            </div>
        </div>
    </div>
</div>
<div   class=" py-100">


@include('footer')

</div>

</body>
</html>