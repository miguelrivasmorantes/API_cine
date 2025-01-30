<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\controladorPeliculas;
use App\Http\Controllers\api\controladorEstudios;
use App\Http\Controllers\api\controladorGeneros;

Route::get('/hola', function () {
    return 'Hola Mundo!!!';
});

// Start: Operations for Películas
Route::get('/peliculas', [controladorPeliculas::class, 'index']);

Route::get('/peliculas/{id}', [controladorPeliculas::class, 'show']);

Route::post('/peliculas', [controladorPeliculas::class, 'store']);
// End: Operations for Películas


// Start: Operations for Estudios
Route::get('/estudios', [controladorEstudios::class, 'index']);

Route::get('/estudios/{id}', [controladorEstudios::class, 'show']);

Route::post('/estudios', [controladorEstudios::class, 'store']);

Route::patch('/estudios/{id}', [controladorEstudios::class, 'update']);
// End: Operations for Estudios


// Start: Operatios for Géneros
Route::get('/generos', [controladorGeneros::class, 'index']);

Route::get('/generos/{id}', [controladorGeneros::class, 'show']);

Route::post('/generos', [controladorGeneros::class, 'store']);
// Start: Operatios for Géneros