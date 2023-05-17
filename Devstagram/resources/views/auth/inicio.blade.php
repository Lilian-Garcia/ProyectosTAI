@extends('layouts.app')

@section('titulo')
    Dashboard
@endsection

@section('header')
    <!-- Sección del encabezado -->
    <header class="bg-white" style="background-image: url('./img/5.jpg');">
        <div class="mx-auto max-w-7xl px-2 py-14 sm:px-2 lg:px-8">
            <!-- Contenido del encabezado -->
        </div>
        <div class="bg-cover bg-center py-12">
            <div class="container mx-auto px-4 text-center text-gray-200">
                <!-- Contenido adicional del encabezado -->
                <p class="text-8xl font-bold text-bold text-blue-400">¡Bienvenidos a mi Devstagram!</p>
            </div>
        </div>
    </header>
    <div class="container mx-auto max-w-7xl text-center py-2 sm:px-2 lg:px-8">
        <!-- Contenido adicional después del encabezado -->
        <p class="text-5xl font-bold text-blue-600">Yo soy Lilian Sayli</p>
    </div>
@endsection

@section('contenido')
    <!-- Sección del contenido principal -->
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Contenido principal de la página -->
            Aquí iría el contenido de la página del dashboard
        </div>
    </main>
@endsection
