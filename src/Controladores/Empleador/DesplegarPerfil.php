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

    public function calificacion(){
        $idartesano= $_GET['idartesano'];
        $artesanos=$this->artesanos->desplegarPerfil($idartesano );
        $calificacion=(floatval($artesanos[0]->calificacion)+floatval($_POST['puntuacion']))/2;
        $calificacion=round($calificacion,2);
        $artesanos[0]->calificacion=$calificacion;

        $data=[
            'idartesano'=>$idartesano,
            'calificacion'=>$calificacion

        ];

        $this->artesanos->update($data);
        
        return[
            'template'=>'empleador/perfillaboral.html.php',
            'titulo'=>'Perfil Laboral',
            'variables'=>[
                'artesanos'=>$artesanos
            ]

        ];

    }

}