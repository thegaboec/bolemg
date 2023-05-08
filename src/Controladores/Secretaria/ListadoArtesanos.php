<?php
namespace App\Controladores\Secretaria;

use App\Aplicacion\Utilidades\Reportes\Reporte;
use App\Modelos\Artesanos;

class ListadoArtesanos{

    private $artesanos;

    public function __construct(

        Artesanos $artesanos

    )
    {
        $this->artesanos=$artesanos;
    }


    public function listar(){

        
        $artesanos = $this->artesanos->selectPaginacion();
       
        return [

            'titulo'=>'Listado de Artesanos',
            'template'=>'secretaria/listadoArtesanos.html.php',
            'variables' => ['artesanos' => $artesanos]
        ];


    }

    public function  imprimir(){

        $artesanos = $this->artesanos->selectPaginacion();
        $reporte= new Reporte();
        $reporte->generarReporte($artesanos);

        exit;



    }
}