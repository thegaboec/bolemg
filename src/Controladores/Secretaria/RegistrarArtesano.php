<?php

namespace App\Controladores\Secretaria;

class RegistrarArtesano{

    public function registrarA(){
        return [
            'titulo' => 'Registrar Artesano',
            
            'template' => 'secretaria/registrar_artesano.html.php'
        ];
    }
}