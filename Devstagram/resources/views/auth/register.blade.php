<!-- Crear una directiva para incluir la navegacion -->
{{-- Esta línea indica que esta vista extiende la plantilla llamada app.blade.php ubicada en la carpeta layouts. 
    La plantilla app.blade.php es probablemente el diseño principal de la aplicación. --}}
@extends('layouts.app')

{{-- contenido del titulo --}}
@section('titulo')
    Registrate a Devstagram
@endsection 

{{-- DIv de contenido --}}
@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            {{-- Colocar una imagen --}}
            <img src="{{asset ('img/registrar.jpg')}}" alt="registro de usuarios">
        </div>    
    
        <div class="md:w-4/12 bg:purple-500 p-5 rounded-lg shadow-xl">
            {{-- Aquí comienza el formulario de registro de usuarios con los diferentes div para el formato de los inputs--}}
            <form>
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-purple-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" type="text" name="name" placeholder="Tu nombre" class="border p-3 w-full rounded-lg">
                </div>
            
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-purple-500 font-bold">
                        Username
                    </label>
                    <input id="username" type="text" name="username" placeholder="Tu username" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-purple-500 font-bold">
                        Email
                    </label>
                    <input id="email" type="text" name="email" placeholder="Tu email de registro" class="border p-3 w-full rounded-lg">
                </div>
                
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-purple-500 font-bold">
                        Password
                    </label>
                    <input id="password" type="password" name="password" placeholder="Tu password de registro" class="border p-3 w-full rounded-lg">
                </div>
                {{-- Botones de guardar registro --}}
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-purple-500 font-bold">
                        Password
                    </label>
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Repetir password" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="crear cuenta" class="bg-purple-600 hover:bg-purple-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>  
    </div>

@endsection

