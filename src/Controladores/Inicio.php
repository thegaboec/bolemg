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
        

        return [

            'template'=>'front/inicio.html.php',
            'titulo'=>'Bolem-Guaranda',

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

    
    public function institucion(){
        return[

            'template'=>'front/institucion.html.php',
            'titulo'=>'Institucion'
        ];



    }
    
    public function publicaG(){
        $publicaciones=$this->publicaciones->selectFromColumn('estado',Publicaciones::ESTADO_ACTIVO);
  
        return[

            'template'=>'front/publicaciones.html.php',
            'titulo'=>'Publicaciones',
            'variables'=>[
                'publicaciones'=>$publicaciones
            ]
        ];
    }

    public function listarpublica(){

        $idpublicaciones= $_GET['idpublicaciones'];

        $publicaciones=$this->publicaciones->verPublicacion($idpublicaciones);
        
        //var_dump($publicaciones);
        //die;
        return[

            'template'=>'front/publicacion.html.php',
            'titulo'=>'Publicación',
            'variables'=>[
                'publicaciones'=>$publicaciones
            ]

        ];


    }


}