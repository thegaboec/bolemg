<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

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
        parent::__construct('artesanados','idartesanado','App\Modelos\Artesanados',[]);
    }

    

}