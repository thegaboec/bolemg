<?php

namespace App\Modelos;

class Artesanados extends DatabaseTable {
    public const PRESIDENTE = 'Presidente';
    public const SECRETARIA = 'Secretaria';
    public const ARTESANO = 'Artesano';
    public const EMPLEADOR = 'Empleador';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $idartesanado;
    public $categoria;
    public $url_foto;
    private $modelArtesanado;
    private $results;

    public function __construct()
    {
        parent::__construct('artesanados','idartesanado','App\Modelos\Artesanados',['artesanados','idartesanado']);
    }

  

    public function metodoChuck(){
        $result =Usuarios::runChunck(function($page,$count){
            $pages =($page - 1) * $count;
            $count = $count * $page;
            $estado=Usuarios::ESTADO_ACTIVO;
            $result=$this->query(
            "SELECT * FROM artesanados WHERE estado ='$estado'  LIMIT $count OFFSET $pages"
           );
          
           return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);
        });

        return $result;
    }   

}