<?php
namespace App\Controladores\Secretaria;
use App\Modelos\Artesanos;

class ListadoArtesanos{

    private $artesanos;

    public function __construct(

        Artesanos $artesanos

    )
    {
        $this->artesanos=$artesanos;
    }


    public function listar(){

        
        $artesanos = $this->artesanos->select();
       
        return [

            'titulo'=>'Listado de Artesanos',
            'template'=>'secretaria/listadoArtesanos.html.php',
            'variables' => ['artesanos' => $artesanos]
        ];


    }
}