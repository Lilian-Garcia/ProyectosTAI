<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Portal - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Styles -->

    </head>
    <body class="h-full">

        <header class="p-5 border-b bg-purple-400 shadow">
          <div class="container mx auto flex justify-between items-center bg-purple-400">
            <h1 class="text-3xl font-bold text-cyan-300">
              <a href="/">Devstagram</a>
            </h1>
            <nav class="flex gap-2 items-center">
              <a class="font-bold uppercase text-cyan-300 text-sm" href=""> Login</a>
              <a class="font-bold uppercase text-cyan-300 text-sm"  href="crearCuenta"> Crear usuario</a>
            </nav>
          </div>
        </header>

        <main class="container mx-auto mt-10">
          @yield('header')
          
          <br>
          <h1 class="font-black text-center text-4xl mb-10 text-purple-500">@yield('titulo')</h1>
          
          @yield('contenido')
        </main>

        <footer class="bg-purple-400 py-6">
          <div class="container mx-auto px-6 text-cyan-300 text-center text-lg" >
              <p>Copyright &copy; Lilian
                  <span id="date"></span>. all rights reserved {{now()->year}}</p>
          </div>
        </footer>

    </body>
</html>
