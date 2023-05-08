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

  

    
    
    public function selectPaginacion($limit = 9, $offset = null, $orderBy = false, $column = null)
    {
        $queyCount = 'SELECT COUNT(idartesanado) as count FROM artesanados';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM artesanados limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }


    public function selectFromColumnPaginacion($column, $restrict, $limit = 9)
   
   
    {
        $queyCount = 'SELECT COUNT(idartesanado) as count FROM artesanados';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM artesanados where $column=$restrict limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }

    /*public function paginacion2($limit, array $comlumnsAndValues = [[]]){
        $queyCount = 'SELECT COUNT(idartesanado) as count FROM artesanados';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        $queryInter = "where";
        $igual = '=';
        foreach($comlumnsAndValues as $cv){
            list($column, $value) = $cv;
            $queryInter .= " $column $igual '$value' AND ";
        }
        $queryInter = rtrim($queryInter,"AND");

        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM artesanados $queryInter limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }*/

}