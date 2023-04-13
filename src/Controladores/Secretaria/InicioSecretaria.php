<?php

namespace App\Controladores\Secretaria;

class InicioSecretaria{

    public function index(){
        return [
            'titulo' => 'Inicio Secretaria',
            
            'template' => 'secretaria/inicio.html.php'
        ];
    }
}