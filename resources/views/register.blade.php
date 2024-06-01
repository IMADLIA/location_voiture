<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/lo.png" type="image/x-icon">
    <title>Inscription</title>
    @vite('resources/css/app.css')
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet"> <!-- Inclure votre feuille de style personnalisée -->
</head>
<body class="bg-gray-100">
<div   class=" py-100">


@include('header')

</div>

<section class="bg-gray-50 dark:bg-gray-900">
<div class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('img/ifss.avif');">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
         
        
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white ">
                  Inscrivez-vous
              </h1>
              <div class='card-body'>
              @if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                {{ Session::get('success')}}
               </div>
               @endif
              <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                  <div>
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nom</label>
                      <input type="text" name="nom" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Votre Nom" required="">
                  </div>
                  <div>
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">prenom</label>
                      <input type="text" name="prenom" id="text" placeholder="Votre prenom" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  
                  <div>
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">telephone</label>
                      <input type="text" name="telephone" id="telephone" placeholder="Votre telephone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                      <input type="text" name="email" id="" placeholder="Votre email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>

                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                      </div>
                     
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">j'accepte les conditions <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bg-gray-500">Create an account</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      j'ai deja un compte  <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
                  </p>
              </form>
              </div>
          </div>
      </div>
</div>
</section>
<div   class=" py-10">


@include('footer')

</div>

</body>
</html>
