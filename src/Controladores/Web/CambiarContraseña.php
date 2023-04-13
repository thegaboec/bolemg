<?php

namespace App\Controladores\Web;

class CambiarContraseña{

    public function cambiarContraseña(){
        return [
            'titulo' => 'Cambiar Contraseña',
            
            'template' => 'artesano/perfil.html.php'
        ];
    }
}