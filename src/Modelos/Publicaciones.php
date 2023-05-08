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

    
    public function selectPaginacion($limit = 9, $offset = null, $orderBy = false, $column = null)
    {
        $queyCount = 'SELECT COUNT(idpublicaciones) as count FROM publicaciones';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM publicaciones limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }


    public function selectFromColumnPaginacion($column, $restrict, $limit = 9)
   
   
    {
        $queyCount = 'SELECT COUNT(idpublicaciones) as count FROM publicaciones';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM publicaciones where $column='$restrict' limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }


}