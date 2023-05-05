<?php

namespace App\Modelos;

class Artesanos extends DatabaseTable{

    public const ARTESANO = 'Artesano';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    

                public $idartesano;
                public $nombres; 
                public $apellidos; 
                public $correo ;
                public $clave ;
                public $telefono; 
                public $rol;
                public $estado;
                public $foto ;
                public $idartesanado; 
                public $direccion ;
                public $imagen1 ;
                public $imagen2 ;
                public $imagen3  ;
                public $imagen4  ;
                public $calificacion; 
                public $descripcion1 ; 
                public $descripcion2 ;
                public $descripcion3 ;
                public $descripcion4 ;

    public function __construct()
    {
        parent::__construct('artesanos','idartesano');
    }

    public function tieneRol($rol){
        if($this->rol === $rol) {
            return true;
        }

        return false;
    }


    public function verArtesanado($idartesanado){

        $consulta='SELECT *FROM artesanos WHERE estado =:estado'. 

        ' AND  idartesanado =:idartesanado';

       $result=$this->runQuery($consulta,['estado'=>self::ESTADO_ACTIVO,'idartesanado'=>$idartesanado]);

       return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }


    public function desplegarPerfil($idartesano){

        $consulta1='SELECT *FROM artesanos WHERE estado =:estado'. 

        ' AND  idartesano =:idartesano';

       $result1=$this->runQuery($consulta1,['estado'=>self::ESTADO_ACTIVO,'idartesano'=>$idartesano]);

       return $result1->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }
}