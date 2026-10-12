
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados', [App\Http\Controllers\EmpleadoController::class, 'index']);
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
Route::get('/alquilers', [App\Http\Controllers\AlquilerController::class, 'index']);
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index']);
Route::get('/detalle_alquilers', [App\Http\Controllers\DetalleAlquilerController::class, 'index']);
Route::get('/equipos', [App\Http\Controllers\EquipoController::class, 'index']);
