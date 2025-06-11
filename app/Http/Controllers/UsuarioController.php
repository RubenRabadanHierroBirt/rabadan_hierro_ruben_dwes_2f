<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    private $model;

    public function procesarNombre(Request $request){
        $nombre = $request->name;
        $apellido = $request->apellido;
        $DNI = $request->DNI;
        $model = new Usuario($nombre, $apellido, $DNI);
    }

    public function obtenerNombreCompleto(){
        return $this->model->nombreCompleto();
    }
}
