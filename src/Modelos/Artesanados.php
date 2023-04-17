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
 

    public function __construct()
    {
        parent::__construct('artesanados','idartesanado','App\Modelos\Artesanados',['artesanados','idartesanado']);
    }

    public function getAllInformation(){
        $this->modelArtesanado= new Artesanados;
       $final = [];
       $artesanados = $this->select();
       foreach($artesanados as $artesanado){
           $indexes = $this->modelArtesanado->selectFromColumn('idartesanado',$artesanado->idartesanado);
           if($indexes){
               $artesanado = new Artesanados();
               $artesanado->idartesanado = $artesanado->idartesanado;
               $artesanado->categoria = $artesanado->categoria;
               $artesanado->url_foto = $artesanado->url_foto;


               array_push($final,$$artesanado);
           }

       }
       
      return $final;
   }

   public function selectNombre($option,$value){
    $this->modelArtesanado= new Artesanados;
    $artesanados = [];
    $artesana = $this->modelArtesanado->selectFromColumn($option,$value);
    if($artesana){
            $artesanadosIn = $this->selectFromColumn('idartesanado',$$artesana[0]->idartesanado);
            if($artesanadosIn){
                foreach($artesanadosIn as $artesanado){
                    $artesanado = new Artesanados();
                    $artesanado->idartesanado = $artesanado->idartesanado;
                    $artesanado->categoria = $artesanado->categoria;
                    $artesanado->url_foto = $artesanado->url_foto;
     

                    array_push($artesanados,$artesanado);
                }
            }
    }

    return $artesanados;
}

public function getArtesanadoInformation($idartesanado){
    $this->modelArtesanado= new Artesanados;
    $result = null;
    $artesanado = $this->selectFromColumn('idartesanado',$idartesanado);
    if($artesanado){
        $artesanado= $artesanado[0];
        $artesanado = new Artesanados();
        $artesanado->idartesanado = $artesanado->idartesanado;
        $artesanado->categoria = $artesanado->categoria;
        $artesanado->url_foto = $artesanado->url_foto;

                    $result = $artesanado;
    }
    return $result;
}

    public function getartesanadosID($option){
        $this->modelArtesanado= new Artesanados;
        $result = null;
        $artesanado= $this->selectFromColumn('idartesanado',$option);
        if($artesanado){
            $artesanado = $artesanado[0];
                      $artesanados = new Artesanados();
                      $artesanados ->idartesanado = $artesanado->idartesanado;
                      $artesanados ->categoria = $artesanado->categoria;
                      $artesanados -> url_foto = $artesanado->url_foto;


                        $result = $artesanados;
        }
        return $result;
    }

    

}