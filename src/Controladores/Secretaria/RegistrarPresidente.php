<?php

namespace App\Controladores\Secretaria;

use App\Modelos\Usuarios;

class RegistrarPresidente{

    private $funciones;

    public function index(){

        return[

            'titulo'=>'Agregar Presidente',

            'template'=>'secretaria/agregar_presidente.html.php'
        ];

    }


    public function __construct(

        Usuarios $funciones
    )
    {
        $this->funciones=$funciones;
    }


    public function add(){

        $data = [
            'idusuarios' => $_POST['id'],
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
           'correo' => $_POST['email'],
            'clave' => password_hash($_POST['id'],PASSWORD_DEFAULT),
            'estado' => Usuarios::ESTADO_ACTIVO,
            'rol' => Usuarios::PRESIDENTE
        ];

        

        try {
            $this->funciones->insert($data);

        return [
            'titulo'=>'Login',

            'template'=>'front/login.html.php',
            'variables' => [
                'exito' => 'Acaba de darse de baja con éxito'
            ]
        ];


        } catch (\PDOException $e) {
            //throw $th;
            return [
                'titulo'=>'Delegar Funciones',
    
                'template'=>'presidente/delegar_funciones.html.php',
                'variables' => [
                    'error' => 'Los campos no fueron llenados correctamente'
                ]
            ];
        }

    }


    public function cambiarEstado(){



    }
}