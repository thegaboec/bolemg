<?php
namespace App\Controladores\Secretaria;

use App\Aplicacion\Utilidades\Reportes\Reporteart;
use App\Modelos\Artesanados;

class ListadoArtesanados{

    private $artesanados;

    public function __construct(

        Artesanados $artesanados
    )
    {
        $this->artesanados=$artesanados;
    }


    public function listar(){

        $artesanados=$this->artesanados->metodoChuckSelect();

        return[
            'titulo'=>'Listado de Artesanados',
            'template'=>'secretaria/listadoArtesanados.html.php',
            'variables'=>['artesanados'=> $artesanados]

        ];
    }

    public function  imprimir(){

        $artesanados=$this->artesanados->metodoChuckSelect();
        $reporte= new Reporteart();
        $reporte->generarReporte($artesanados);

        exit;



    }
}