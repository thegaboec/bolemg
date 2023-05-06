<?php
namespace App\Controladores\Empleador;

use App\Modelos\Artesanos;

class ListaArtesanos{


    private $artesanos;

    public function __construct(
        Artesanos $artesanos
    )
    {
        $this->artesanos=$artesanos;
    }

    public function listar(){

        $idartesanado= $_GET['idartesanado'];

        $artesanos=$this->artesanos->metodoChunk($idartesanado );
        
        //var_dump($artesanos);
        //die;
        return[

            'template'=>'empleador/lista_artesanos.html.php',
            'titulo'=>'Artesanos',
            'variables'=>[
                'artesanos'=>$artesanos
            ]

        ];


    }
}