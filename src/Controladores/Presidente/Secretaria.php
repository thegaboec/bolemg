<?php

namespace App\Controladores\Presidente;


use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Usuarios;

use EmptyIterator;

class Secretaria{

    private  $secretaria;

    public function __construct(  Usuarios $secretaria )
    {
        $this->secretaria = $secretaria;
        
    }

    public function index($variables=[]){

        return[

            'titulo'=>'Agregar Secretaria',

            'template'=>'presidente/agregar_secretaria.html.php',
            'variables'=> $variables
        ];

    }

    public function add(){
                
        if(empty($_FILES['fotousuario']['name'])){
            return $this->index(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        $tmp = $_FILES['fotousuario']['tmp_name'];
        $name = $_FILES['fotousuario']['name'];
        $DirecionImage = './assets/fotossecretarias/';
        $outputImage = $DirecionImage . $name;
        

        

        $data = [
            'idusuarios' => $_POST['id'],
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
           'correo' => $_POST['email'],
            'clave' =>password_hash($_POST['id'],PASSWORD_DEFAULT),
            'estado' => Usuarios::ESTADO_ACTIVO,
            'rol' => Usuarios::SECRETARIA,
            'telefono' => trim($_POST['telefono']),
            'fotousuario' => trim($outputImage)
        ];

        try {
            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
            }
            $this->secretaria->insert($data);
            return $this->index(['exito'=>"Se registro correctamente "]);
        } catch (\PDOException $e) {
            return $this->index(['error'=>"No se pudo registrar"]);
        }
        
    }

    
}