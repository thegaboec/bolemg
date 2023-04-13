<?php

namespace App\Controladores\Presidente;

class Inicio {

    public function index(){
        return [
            'titulo' => 'Inicio Presidente',
            'template' => 'presidente/inicio.html.php'
        ];
    }
}