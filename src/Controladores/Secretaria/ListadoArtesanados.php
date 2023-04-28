<?php
namespace App\Controladores\Secretaria;

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

        $artesanados=$this->artesanados->select();

        return[
            'titulo'=>'Listado de Artesanados',
            'template'=>'secretaria/listadoArtesanados.html.php',
            'variables'=>['artesanados'=> $artesanados]

        ];
    }
}