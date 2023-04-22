<?php 

namespace App\Modelos;

class Publicaciones extends DatabaseTable{
    public const PRESIDENTE = 'Presidente';
    public const SECRETARIA = 'Secretaria';
    public const ARTESANO = 'Artesano';
    public const EMPLEADOR = 'Empleador';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $idpublicaciones;
    public $publicacion;
    public $fecha;
    public $foto_publicacion;

    public function __construct(){
        parent::__construct('publicaciones','idpublicaciones','App\Modelos\Publicaciones',['publicaciones','idpublicaciones']);
    }

    public function verPublicacion($idpublicaciones){

        $consulta='SELECT *FROM publicaciones WHERE estado =:estado'. 

        ' AND  idpublicaciones =:idpublicaciones';

       $result=$this->runQuery($consulta,['estado'=>self::ESTADO_ACTIVO,'idpublicaciones'=>$idpublicaciones]);

       return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }

}