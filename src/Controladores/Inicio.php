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
        
    }

    

    public function start(){
       
        return [

            'template'=>'front/inicio.html.php',
            'titulo'=>'Bolem-Guaranda',

        ];

    }

    public function listarArtesanados(){
        $this->artesanados= new Artesanados;

        $artesanados= Artesanados::where('estado',Artesanados::ESTADO_ACTIVO)->get();

    
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
        
        
        $this->usuarios = new Usuarios;
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

      
        $this->publicaciones = new Publicaciones;
        
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

        
        $this->publicaciones = new Publicaciones;
       

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