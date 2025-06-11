<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'name',
        'apellido',
        'DNI',
    ];
    private $nombre;
    private $apellido;
    private $DNI;

    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setApellido($apellido){$this->apellido = $apellido;}
    public function setDNI($DNI){$this->DNI = $DNI;}

    /*public function store(){

    }*/


    public function obtenerNombreCompleto(){
        return "Me llamo " . $this->nombre ." ". $this->apellido . " y mi DNI es " . $this->DNI;
    }
}
