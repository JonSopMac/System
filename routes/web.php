<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('generos', App\Http\Controllers\GeneroController::class)->middleware('auth');
Route::resource('cargos', App\Http\Controllers\CargoController::class)->middleware('auth');;
Route::resource('rols', App\Http\Controllers\RolController::class)->middleware('auth');;
Route::resource('variedads', App\Http\Controllers\VariedadController::class)->middleware('auth');;
Route::resource('fincas', App\Http\Controllers\FincaController::class)->middleware('auth');;
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class)->middleware('auth');;
Route::resource('lotes', App\Http\Controllers\LoteController::class)->middleware('auth');;
Route::resource('enfermedads', App\Http\Controllers\EnfermedadController::class)->middleware('auth');;
Route::resource('registros', App\Http\Controllers\RegistroController::class)->middleware('auth');;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
