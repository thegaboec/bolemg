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
    public function agregar2(){}
    
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
            'titulo'=>'Agregar Presidente',

            'template'=>'secretaria/agregar_presidente.html.php',
            'variables' => [
<<<<<<< HEAD
                'exito' => 'Se registro la información correctamente'
=======
                'exito' => 'Acaba de registrarse correctamente'
>>>>>>> 3c823ead88a911ba97c5d5c924d9829d54df753d
            ]
        ];


        } catch (\PDOException $e) {
            //throw $th;
            return [
                'titulo'=>'Agregar Presidente',
    
                'template'=>'secretaria/agregar_presidente.html.php',
                'variables' => [
                    'error' => 'Los campos no fueron llenados correctamente'
                ]
            ];
        }

    }


<<<<<<< HEAD
   
=======
    
>>>>>>> 3c823ead88a911ba97c5d5c924d9829d54df753d
}