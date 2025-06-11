<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    private $model;

    public function obtenerNombreCompleto(){
        return $this->model->obtenerNombreCompleto();
        //return "Me llamo " . $this->model->nombre ." ". $this->model->apellido . " y mi DNI es " . $this->model->DNI;
    }
    public function procesarNombre(Request $request){
        $json = json_decode($request->getContent(), true);
        $nombre = $json["nombre"];
        $apellido = $json["apellido"];
        $DNI = $json["DNI"];

        $model =new Usuario();
        $model->nombre = $nombre;
        $model->apellido = $apellido;
        $model->DNI = $DNI;

        return "Mi nombre es: "  . "". $nombre ."". $apellido . " y mi DNI es : " . $model->DNI;
        //return json_encode($json, JSON_PRETTY_PRINT);
        //return $this->obtenerNombreCompleto();
    }
}
