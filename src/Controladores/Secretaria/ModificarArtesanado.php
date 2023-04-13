<?php

namespace App\Controladores\Secretaria;

class ModificarArtesanado{

    public function modificarArt(){
        return [
            'titulo' => 'Modificar - Inhabilitar Artesanado',
            
            'template' => 'secretaria/modificarArtesanado.html.php'
        ];
    }
}