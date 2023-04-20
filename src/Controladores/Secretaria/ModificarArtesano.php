<?php

namespace App\Controladores\Secretaria;

use App\Modelos\Artesanos;

class ModificarArtesano{
    private $artesanos;
    
    public function __construct(Artesanos $artesanos)
    {
        $this-> artesanos = $artesanos;
    }

    public function modificarA(){
        $artesanos = $this->artesanos->select();
        return [
            'titulo' => 'Modificar - Inhabilitar Artesano',
            'template' => 'secretaria/modificarArtesano.html.php',
            'variables' => ['artesanos' => $artesanos]
        ];
    }
    public function bajaArtesano(){
        $dataArtesanos = [];
        foreach($_POST as $artesanos){
            if(isset($artesanos['estado'])){
                array_push($dataArtesanos,$artesanos);
                
            }
        }
        $error = '';
        foreach($dataArtesanos as $artesanos){
            $arte = $this->artesanos->selectFromColumn('idartesano',$artesanos['idartesano'])[0];
            $estado = '';
            if($arte->estado === 'activo'){
                $estado = 'inactivo';
            }else{
                $estado = 'activo';
            }

            $dataFinalArtesanos = [
                'estado' => $estado,
                'idartesano' => $artesanos['idartesano']
            ];

            try{
                $this->artesanos->update($dataFinalArtesanos);
            }catch(\PDOException $e){
                $error = 'Error: ' . $e->getMessage();
            }
        }
        return $this->modificarA();
       
    }
}