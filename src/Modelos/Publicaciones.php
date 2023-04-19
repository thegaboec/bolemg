<?php 

namespace App\Modelos;

class Publicaciones extends DatabaseTable{
    public const PRESIDENTE = 'Presidente';
    public const SECRETARIA = 'Secretaria';
    public const ARTESANO = 'Artesano';
    public const EMPLEADOR = 'Empleador';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $idpublicacion;
    public $publicacion;
    public $fecha;
    public $foto_publicacion;

    public function __construct(){
        parent::__construct('publicaciones','idpublicacion','App\Modelos\Publicaciones',['publicaciones','idpublicaciones']);
    }


}