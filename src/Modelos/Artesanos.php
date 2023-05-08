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

    
    public function selectPaginacion($limit = 9, $offset = null, $orderBy = false, $column = null)
    {
        $queyCount = 'SELECT COUNT(idartesano) as count FROM artesanos';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM artesanos limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }


    public function selectFromColumnPaginacion($column, $restrict, $limit = 9)
   
   
    {
        $queyCount = 'SELECT COUNT(idartesano) as count FROM artesanos';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM artesanos where $column=$restrict limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }

    public function selectFromColumnsPaginacion($column, $restrict, $limit = 9)
   
   
    {
        $queyCount = 'SELECT COUNT(idartesano) as count FROM artesanos';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        $estado=Usuarios::ESTADO_ACTIVO;
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            
            $results = $this->query("SELECT *  FROM artesanos where $column=$restrict and estado ='$estado'limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }


}