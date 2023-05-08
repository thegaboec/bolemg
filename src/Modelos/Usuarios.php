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
    public $nombre;
    public $rol;
    public $apellido;
    public $email;
    public $estado;
    public $clave;
    public $fotousuario;
    public $telefono;

    public function __construct()
    {
       parent::__construct( 'usuarios','idusuarios','App\Modelos\Usuarios',['usuarios','idusuarios']    );
       
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
        $queyCount = 'SELECT COUNT(idusuarios) as count FROM usuarios';
        $count = $this->runQuery($queyCount);
        $count=$count->fetch();
        
        $pagination = ceil(intval($count['count'])/$limit);
        $resultados = [];
        for($i =0; $i <= $pagination; $i++){
            $offset= $i * $limit;
            $results = $this->query("SELECT *  FROM usuarios where $column='$restrict' limit $limit offset $offset");
            foreach($results->fetchAll(\PDO::FETCH_CLASS,\stdClass::class) as $resultado){
                array_push($resultados, $resultado);
            }

            unset($results);
        }

        return $resultados;

    }
 
}
