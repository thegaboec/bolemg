<?php
namespace App\Controladores\Empleador;

use App\Modelos\Artesanados;

class VerArtesanados{


    private $artesanados;

    public function __construct(

        Artesanados $artesanados
    )
    {
        $this->artesanados=$artesanados;
    }


    public function listarArtesanados(){

        $artesanados=$this->artesanados->selectFromColumnPaginacion('estado',Artesanados::ESTADO_ACTIVO);
  
        return[

            'template'=>'empleador/artesanados.html.php',
            'titulo'=>'Artesanados',
            'variables'=>[
                'artesanados'=>$artesanados
            ]

        ];
    }
}