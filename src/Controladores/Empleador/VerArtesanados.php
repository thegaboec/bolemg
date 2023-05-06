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

        $artesanados=$this->artesanados->metodoChuck();
  
        return[

            'template'=>'empleador/artesanados.html.php',
            'titulo'=>'Artesanados',
            'variables'=>[
                'artesanados'=>$artesanados
            ]

        ];
    }
}