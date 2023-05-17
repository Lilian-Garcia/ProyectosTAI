<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*

Aquí tienes el código comentado:

php
Copy code
Route::get('/', [Dashboard::class, 'inicio']);
Esta línea de código define una ruta GET para la URL raíz ("/") que se asigna al método "inicio" del controlador "Dashboard".
 Cuando un usuario accede a la URL raíz,
 se llama al método "inicio" del controlador "Dashboard" para manejar la solicitud.
*/
Route::get('/',[Dashboard::class,'inicio']);
//lo mismo que el anterior pero para el apartado de crear una cuenta
Route::get('/crearCuenta',[RegisterController::class,'index']);