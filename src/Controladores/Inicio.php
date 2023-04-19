<?php

namespace App\Controladores;

use App\Modelos\Artesanados;
use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;

class Inicio {

    private Artesanados $artesanados;
    private Publicaciones $publicaciones;


    public function __construct()
    {
        $this->artesanados= new Artesanados;
        $this->publicaciones = new Publicaciones;
    }

    public function start(){
        $publicaciones=$this->publicaciones->selectFromColumn('estado',Publicaciones::ESTADO_ACTIVO);
  

        return [

            'template'=>'front/inicio.html.php',
            'titulo'=>'Bolem-Guaranda',
            'variables'=>[
                'publicaciones'=>$publicaciones
            ]
        ];

    }

    public function listarArtesanados(){


        $artesanados=$this->artesanados->selectFromColumn('estado',Artesanados::ESTADO_ACTIVO);
  
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