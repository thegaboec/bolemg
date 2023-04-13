<?php

namespace App\Controladores\Secretaria;

class RegistrarArtesanado{

    public function registrarArt(){
        return [
            'titulo' => 'Registrar Artesanado',
            
            'template' => 'secretaria/registrarArtesanado.html.php'
        ];
    }
}