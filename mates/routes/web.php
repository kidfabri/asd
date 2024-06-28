<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ReaccionController;

Route::get("/", [PublicacionController::class, "Listar"]);

Route::get('/publicacion', function () {
    return view('crearPublicacion');
});

Route::post('/publicacion', [PublicacionController::class, 'Crear']);

Route::get('/eliminar/{id}', [PublicacionController::class, 'Eliminar']);

Route::get('/modificar/{id}', [PublicacionController::class, 'MostrarFormularioDeModificar']);
Route::post('/modificar', [PublicacionController::class, 'Modificar']);
