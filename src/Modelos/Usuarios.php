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


    public static function runChunck( $consulta,$params=[]){
        $results = [];

        self::chunk(9,function($resultados )use (&$results) {
            foreach($resultados as $resultado) {
                
                array_push($results,$resultado);
                
            }
        },$consulta,$params);
        
        return $results;

        
    }

    public static function chunk($count, callable $callback, $consulta,$params)
    {
        $page = 1;
        
        do {
            // We'll execute the query for the given page and get the results. If there are
            // no results we can just break and return from here. When there are results
            // we will call the callback with the current chunk of these results here.
            $results = $consulta($page, $count,...$params);
            $countResults = count($results);
 
            if ($countResults == 0) {
                break;
            }
 
            // On each chunk result set, we will pass them to the callback and then let the
            // developer take care of everything within the callback, which allows us to
            // keep the memory low for spinning through large result sets for working.
            if ($callback($results, $page) === false) {
                return false;
            }
 
            unset($results);
 
            $page++;
        } while ($countResults == $count);
 
        return true;
    }
 
}
