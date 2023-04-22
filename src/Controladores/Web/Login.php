<?php

namespace App\Controladores\Web;

use App\MarcoTrabajo\Autentificacion;
use App\Modelos\Usuarios;

class Login {
    private $autentificacion;

    public function __construct(Autentificacion $autentificacion)
    {
        $this->autentificacion = $autentificacion;
    }   

    public function logueo(){
        return [
            'titulo' => 'Login',
            
            'template' => 'front/login.html.php'
        ];
    }

    public function autentificacion(){
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $comprobacion =  $this->autentificacion->verificacion($usuario, $clave);
        $rolesRedirecionamientos = [
            Usuarios::PRESIDENTE => '/presidente/inicio',
            Usuarios::SECRETARIA => '/secretaria/inicio',
            Usuarios::ARTESANO => '/artesano/inicio',
            Usuarios::EMPLEADOR => '/empleador'
        ];

        if($comprobacion){
            $ruta = $rolesRedirecionamientos[$_SESSION['rol']] ?? '/';
            header('location: '.$ruta );
            exit();
        }

        return [
            'titulo' => 'Login',
            'template' => 'front/login.html.php',
            'variables' => [
                'error' => 'Usuario o contraseña incorrectos'
            ]
        ];
        
    }


    public function logOut(){

        unset($_SESSION);
        session_destroy();

        header('location: /');

        
    }
}