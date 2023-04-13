<?php

namespace App\Controladores\Secretaria;

class Publicar{

    public function publicarAnuncio(){
        return [
            'titulo' => 'Publicar Anuncio',
            
            'template' => 'secretaria/publicar.html.php'
        ];
    }
}