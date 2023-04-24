<?php

namespace App\Controladores\Artesano;

class InicioArtesano { 

    public function indexA(){
        return [
            'titulo' => 'Inicio Artesano',
            
            'template' => 'artesano/inicioArtesano.html.php'
        ];
    }

    
}