<?php

namespace App\Controladores\Secretaria;

class ModificarArtesano{

    public function modificarA(){
        return [
            'titulo' => 'Modificar - Inhabilitar Artesano',
            
            'template' => 'secretaria/modificarArtesano.html.php'
        ];
    }
}