<?php

namespace App\Controladores\Empleador;

class InicioEmpleador{

    public function index(){
        return [
            'titulo' => 'Inicio Empleador',
            
            'template' => 'empleador/inicio.html.php'
        ];
    }
}