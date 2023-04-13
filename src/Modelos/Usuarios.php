<?php

namespace App\Modelos;

class Usuarios extends DatabaseTable{

    public const PRESIDENTE = 'Presidente';
    public const SECRETARIA = 'Secretaria';
    public const ARTESANO = 'Artesano';
    public const EMPLEADOR = 'Empleador';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $idusuarios;
    public $nombre;
    public $rol;
    public $apellido;
    public $email;
    public $estado;
    public $password;

    public function __construct()
    {
       parent::__construct( 'usuarios','idusuarios','App\Modelos\Usuarios',['usuarios','idusuarios']    );
       
    }


    public function tieneRol($rol){
        if($this->rol === $rol) {
            return true;
        }

        return false;
    }
 
}
