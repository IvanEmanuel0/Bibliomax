<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrestamoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view('welcome');
});

Route::resource('libro', LibroController::class);
Route::resource('editorial', EditorialController::class);
Route::resource('genero', GeneroController::class);
Route::resource('afiliado', AfiliadoController::class);
Route::resource('autor', AutorController::class);
Route::resource('empleado', EmpleadoController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('prestamo', PrestamoController::class);
