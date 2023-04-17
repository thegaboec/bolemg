<?php

namespace App\Controladores\Secretaria;
use App\Modelos\Artesanados;


class RegistrarArtesanado{
    private $artesanados;

    public function __construct( Artesanados $artesanados)
    {
        $this-> artesanados = $artesanados;
    }
    public function registrarArt(){
        return [
            'titulo' => 'Registrar Artesanado',
            'template' => 'secretaria/registrarArtesanado.html.php'
        ];
    }
    public function nuevoArtesanados(){

        $add =[
            'idartesanado' => trim($_POST['idartesanado']),
            'categoria' => trim($_POST['categoria']), 
            'url_foto' => trim($_POST['url_foto']),
            'estado' => Artesanados::ESTADO_ACTIVO
        ];

        try{
            $this ->artesanados->insert($add);
            return[
                'titulo' => 'Registrar Artesanado',
                'template' => 'secretaria/registrarArtesanado.html.php',
                'variables' => [
                        
                    'success' => 'Se registro correctamente el nuevo artesanado'
                ]
                ];
            
        }catch(\PDOException $e){
                return [
                    'titulo'=>'Agregar Secretaria',
                    'template'=>'presidente/agregar_secretaria.html.php',
                    'variables' => [
                        
                        'error' => 'No se pudo registrar'
                        ] 
                     ];
        }
    }
}