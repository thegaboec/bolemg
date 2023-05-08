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
    
    public function metodoChuckSelect(){
        $result =Usuarios::runChunck(function($page,$count){
            $pages =($page - 1) * $count;
           // $count = $count * $page;
            $estado=Usuarios::ESTADO_ACTIVO;
            $result=$this->query(
            "SELECT * FROM artesanados  LIMIT $count OFFSET $pages"
           );
          
           return $result->fetchAll(\PDO::FETCH_CLASS,\stdClass::class);
        });

        return $result;
    } 
    
    public function paginacion($limit){
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

}