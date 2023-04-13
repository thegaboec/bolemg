<?php

namespace App\Controladores\Artesano;

class Perfil{

    public function perfilLaboral(){
        return [
            'titulo' => 'Perfil Laboral',
            
            'template' => 'artesano/perfil.html.php'
        ];
    }
}