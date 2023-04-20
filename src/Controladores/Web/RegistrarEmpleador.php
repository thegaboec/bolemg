<?php
namespace App\Controladores\Web;

use App\Modelos\Usuarios;

class RegistrarEmpleador{

    private $empleador;


    public function __construct(

        Usuarios $empleador

    )
    {
        $this->empleador=$empleador;
    }


    public function registroE($variables=[]){

        return[
            'titulo'=> 'Registro',
            'template'=>'front/registro_empleador.html.php',
            'variables'=> $variables


        ];


    }

    public function add(){

        $data=[

            'idusuarios' => trim($_POST['idusuarios']),
            'nombres'=> $_POST['nombres'],
            'apellidos'=> $_POST['apellidos'],
            'correo'=> $_POST['correo'],
            'clave'=> password_hash($_POST['idusuarios'],PASSWORD_DEFAULT),
            'rol'=> Usuarios::EMPLEADOR,
            'estado'=> Usuarios::ESTADO_ACTIVO

        ];

       

        try {
            $this->empleador->insert($data);

            return $this->registroE(['success'=>"Se registro correctamente"]);
        } catch (\PDOException $e) {
            return $this->registroE(['error'=>"No se pudo registrar correctamente"]);
        }

    }


}