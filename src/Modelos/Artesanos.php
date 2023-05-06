<?php

namespace App\Modelos;

class Artesanos extends DatabaseTable{

    public const ARTESANO = 'Artesano';
    public const ESTADO_ACTIVO = 'activo';
    public const ESTADO_INIACTIVO = 'inactivo';

    public $rol;

    public function __construct()
    {
        parent::__construct('artesanos','idartesano','App\Modelos\Artesanos',['artesano','idartesano']  );
    }

    public function tieneRol($rol){
        if($this->rol === $rol) {
            return true;
        }

        return false;
    }

    




    public function verArtesanado($page=0,$count=0, $idartesanado=null){
        $pages =($page - 1) * $count;
        $count = $count * $page;

        $consulta='SELECT *FROM artesanos WHERE estado =:estado'. 

        ' AND  idartesanado =:idartesanado LIMIT :limit OFFSET :offset';

       $result=$this->runQuery($consulta,['estado'=>self::ESTADO_ACTIVO,'idartesanado'=>$idartesanado,'limit'=>$count,'offset'=>$pages]);

       return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);

       
    }


    public function desplegarPerfil($idartesano){

        $consulta1='SELECT *FROM artesanos WHERE estado =:estado'. 

        ' AND  idartesano =:idartesano';

       $result1=$this->runQuery($consulta1,['estado'=>self::ESTADO_ACTIVO,'idartesano'=>$idartesano]);

       return $result1->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);


    }

    public function metodoChunk($idartesanado){

        $result= Usuarios::runChunck(function($page=0,$count=0, $idartesanado=null){
        
            $pages =($page - 1) * $count;
        $count = $count * $page;
        $estado=Usuarios::ESTADO_ACTIVO;
        $result=$this->query(
        "SELECT * FROM artesanos WHERE estado ='$estado' AND  idartesanado = '$idartesanado' LIMIT $count OFFSET $pages"
       );
      
       return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);
            
        },[$idartesanado]);

       return $result;

    }

}