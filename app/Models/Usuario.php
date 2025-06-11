<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name',
        'email',
        'DNI',
    ];
    private $nombre;
    private $apellido;
    private $DNI;
    public function __construct($nombre, $apellido, $DNI){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->DNI = $DNI;
    }

    /*public function store(){

    }*/


    public function obtenerNombreCompleto(){
        return "Me llamo " . $this->nombre ." ". $this->apellido . " y mi DNI es " . $this->DNI;
    }
}
