<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/lo.png" type="image/x-icon">
  <title>IL-Voiture</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-cover bg-center min-h-screen flex flex-col" style="background-image: url('img/8.jpeg');">

  <!-- Header Section -->
  <header class="bg-white-800  text-center">
    @include('header')
  </header>

  <!-- Main Content Section -->
 
  <main class="flex-grow flex items-center justify-center">
  
    <div class="text-center">
      <h1 class="text-5xl font-bold text-gray-800 mb-6">Bienvenue sur notre site</h1>
      <a href="/voitures">
      <button class="bg-yellow-800 hover:bg-red-900 text-white font-bold py-6 px-14 rounded-full text-xl shadow-lg">
        Réservez maintenant
      </button>
      </a>
    </div>
  </main>

  <!-- Footer Section -->
  <footer class="bg-gray-800 text-white text-center py-4">
    @include('footer')
  </footer>

</body>
</html>
