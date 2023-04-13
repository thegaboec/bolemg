<?php

namespace App\Controladores;

use App\Modelos\Artesanados;
use App\Modelos\Usuarios;

class Inicio {

    private Artesanados $artesanados;


    public function __construct()
    {
        $this->artesanados= new Artesanados;
    }

    public function start(){
        

        return [

            'template'=>'front/inicio.html.php',
            'titulo'=>'Bolem-Guaranda'

        ];

    }

    public function listarArtesanados(){


        $artesanados=$this->artesanados->select();
  
        return[

            'template'=>'front/artesanadospublicos.html.php',
            'titulo'=>'Artesados',
            'variables'=>[
                'artesanados'=>$artesanados
            ]

        ];


    }

    public function contactos(){
        return[

            'template'=>'front/contactos.html.php',
            'titulo'=>'Contactos'
        ];



    }


}