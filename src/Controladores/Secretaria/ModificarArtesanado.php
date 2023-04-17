<?php

namespace App\Controladores\Secretaria;
use App\Modelos\Artesanados;

class ModificarArtesanado{

    private $artesanados;
    
    public function __construct(Artesanados $artesanados)
    {
        $this-> artesanados = $artesanados;
    }

    public function darbajaArt(){
  
        $artesanados = $this->artesanados->select();
     
            return [
                'titulo' => 'Modificar - Inhabilitar Artesanado',
                'template' => 'secretaria/modificarArtesanado.html.php',
                'variables' => ['artesanados' => $artesanados]
        ];
    }

    public function bajaArtesanados(){
        $dataArtesanados = [];
        foreach($_POST as $artesanados){
            if(isset($artesanados['estado'])){
                array_push($dataArtesanados,$artesanados);
                
            }
        }
        $error = '';
        foreach($dataArtesanados as $artesanado){
            $arten = $this->artesanados->selectFromColumn('idartesanado',$artesanado['idartesanado'])[0];
            $estado = '';
            if($arten->estado === 'activo'){
                $estado = 'inactivo';
            }else{
                $estado = 'activo';
            }

            $dataFinalArtesanados = [
                'estado' => $estado,
                'idartesanado' => $artesanado['idartesanado']
            ];

            try{
                $this->artesanados->update($dataFinalArtesanados);
            }catch(\PDOException $e){
                $error = 'Error: ' . $e->getMessage();
            }
        }
        return $this->darbajaArt();
       
    }
}