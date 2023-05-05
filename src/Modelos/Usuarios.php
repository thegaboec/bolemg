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
    public $nombres;
    public $rol;
    public $apellidos;
    public $correo;
    public $estado;
    public $clave;
    public $fotousuario;
    public $telefono;

    public function __construct()
    {
       parent::__construct( 'usuarios','idusuarios');
       
    }


    public function tieneRol($rol){
        if($this->rol === $rol) {
            return true;
        }

        return false;
    }
    
    public function desplegarus(){

        $consulta1='SELECT *FROM usuarios WHERE estado =:estado'. ' AND rol =:rol';

       $result1=$this->runQuery($consulta1,['estado'=>self::ESTADO_ACTIVO,'rol'=> self::PRESIDENTE]);

       return $result1->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }


    public function desplegarse(){

        $consulta2='SELECT *FROM usuarios WHERE estado =:estado'. ' AND rol =:rol';

       $result2=$this->runQuery($consulta2,['estado'=>self::ESTADO_ACTIVO,'rol'=> self::SECRETARIA]);

       return $result2->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }
 
}
