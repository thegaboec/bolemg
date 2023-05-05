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

    private function chunk($count, callable $callback)
    {
        $page = 1;
 
        do {
            // We'll execute the query for the given page and get the results. If there are
            // no results we can just break and return from here. When there are results
            // we will call the callback with the current chunk of these results here.
            $results = $this->querySelectEvidencias($page, $count);
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

    private function querySelectEvidencias($page,$count): array
    {
     $pages = ($page - 1) * $count;
     $count = $count * $page;
     $query = 'SELECT * FROM artesanados  limit ? offset ?';
     $parasm = [$count, $pages];
     $result = $this->runQuery($query,$parasm);
     return $result->fetchAll();
    }

    public function select($limit = null, $offset = null, $orderBy = false, $column = null)
    {
        $this->results = [];
        $this->chunk(9,function($evidencias) {
            foreach($evidencias as $evidencia) {
                array_push($this->results,$evidencia);
            }
        });
        
        return $this->results;

    }
 

    

}