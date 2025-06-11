<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Models\Usuario;
use App\Http\Controllers\UsuarioController;

Route::get( '/user', function (Request $request) {
    //return $request->user();
    return $request->path();
});


Route::get('/usuario', [Usuario::class,'obtenerNombreCompleto']);

Route::post('/nombreCompleto', [UsuarioController::class,'procesarNombre']);
