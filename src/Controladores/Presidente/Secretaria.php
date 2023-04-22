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

    public function index(){

        return[

            'titulo'=>'Agregar Secretaria',

            'template'=>'presidente/agregar_secretaria.html.php'
        ];

    }

    public function add(){

        

        $data = [
            'idusuarios' => $_POST['id'],
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
           'correo' => $_POST['email'],
            'clave' =>password_hash($_POST['id'],PASSWORD_DEFAULT),
            'estado' => Usuarios::ESTADO_ACTIVO,
            'rol' => Usuarios::SECRETARIA
        ];

        try {
            $this->secretaria->insert($data);



        return [
            'titulo'=>'Registrar Secretaria',

            'template'=>'presidente/agregar_secretaria.html.php',
            'variables' => [
                'exito' => 'Se registró correctamente a la nueva secretaria'
            ]
        ];


        } catch (\PDOException $e) {
            //throw $th;
            return [
                'titulo'=>'Agregar Secretaria',
    
                'template'=>'presidente/agregar_secretaria.html.php',
                'variables' => [
                    'error' => 'Los campos no fueron llenados correctamente'
                ]
            ];
        }
        
    }

    
}