<?php

namespace App\Controladores\Secretaria;

use App\Modelos\Usuarios;

class RegistrarPresidente{

    private $funciones;

    public function index($variables=[]){

        return[

            'titulo'=>'Agregar Presidente',

            'template'=>'secretaria/agregar_presidente.html.php',
            'variables'=> $variables
        ];

    }


    public function __construct( Usuarios $funciones  )
    {
        $this->funciones=$funciones;
    }

    
    public function add(){

        if(empty($_FILES['fotousuario']['name'])){
            return $this->index(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        $tmp = $_FILES['fotousuario']['tmp_name'];
        $name = $_FILES['fotousuario']['name'];
        $DirecionImage = './assets/fotospresidentes/';
        $outputImage = $DirecionImage . $name;
        

        $data = [
            'idusuarios' => $_POST['id'],
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
           'correo' => $_POST['email'],
            'clave' => password_hash($_POST['id'],PASSWORD_DEFAULT),
            'estado' => Usuarios::ESTADO_ACTIVO,
            'rol' => Usuarios::PRESIDENTE,
            'telefono' => trim($_POST['telefono']),
            'fotousuario' => ltrim($outputImage,'.')
        ];

        

        try { 
            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
            }
            $this->funciones->insert($data);
            return $this->index(['exito'=>"Se registro correctamente "]);
        } catch (\PDOException $e) {
            return $this->index(['error'=>"No se pudo registrar"]);
        }

    }


    
}