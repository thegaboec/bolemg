<?php

namespace App\Controladores;

use App\Modelos\Artesanados;
use App\Modelos\Usuarios;
use App\Modelos\Publicaciones;

class Inicio  {

    private Artesanados $artesanados;
    private Publicaciones $publicaciones;
    private Usuarios $usuarios;


    public function __construct()
    {
        $this->artesanados= new Artesanados;
        $this->publicaciones = new Publicaciones;
        $this->usuarios = new Usuarios;
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

    public function error(){
        return[

            'template'=>'front/error.html.php',
            'titulo'=>'Error encontrado'
        ];



    }

    
    public function institucion(){
        
        $usuarios=$this->usuarios->desplegarus();
        $usuarios1=$this->usuarios->desplegarse();


        return[

            'template'=>'front/institucion.html.php',
            'titulo'=>'Institucion',
            'variables'=>[
                'usuarios'=>$usuarios, 'usuarios1'=>$usuarios1
            ]
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