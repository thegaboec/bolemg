<?php
namespace App\Controladores\Secretaria;

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

        $publicaciones=$this->publicaciones->select();

        return[

            'titulo'=>'Listado de Publicaciones',
            'template'=>'secretaria/listadoPublicaciones.html.php',
            'variables'=>['publicaciones'=>$publicaciones]
        ];

        
    }
}