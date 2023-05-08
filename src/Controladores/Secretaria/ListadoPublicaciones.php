<?php
namespace App\Controladores\Secretaria;

use App\Aplicacion\Utilidades\Reportes\Reporte;
use App\Aplicacion\Utilidades\Reportes\Reportepubli;
use App\Modelos\Publicaciones;

class ListadoPublicaciones{


    private $publicaciones;

    public function __construct(

        Publicaciones $publicaciones
    )
    {
        $this->publicaciones=$publicaciones;
    }

    public function listar(){

        $publicaciones=$this->publicaciones->selectPaginacion();

        return[

            'titulo'=>'Listado de Publicaciones',
            'template'=>'secretaria/listadoPublicaciones.html.php',
            'variables'=>['publicaciones'=>$publicaciones]
        ];

        
    }

    public function  imprimir(){

        $publicaciones = $this->publicaciones->selectPaginacion();
        $reporte= new Reportepubli();
        $reporte->generarReporte($publicaciones);

        exit;



    }
}