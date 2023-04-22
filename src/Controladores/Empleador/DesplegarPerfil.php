<?php

namespace App\Controladores\Empleador;

use App\Modelos\Artesanos;

class DesplegarPerfil{

    private $artesanos;

    public function __construct(

        Artesanos $artesanos
    )
    {
        $this->artesanos=$artesanos;

    }




    public function desplegar(){

        $idartesano= $_GET['idartesano'];
        $artesanos=$this->artesanos->desplegarPerfil($idartesano );

        //var_dump($artesanos);
        //die;

        return[
            'template'=>'empleador/perfillaboral.html.php',
            'titulo'=>'Perfil Laboral',
            'variables'=>[
                'artesanos'=>$artesanos
            ]

        ];

    }

}