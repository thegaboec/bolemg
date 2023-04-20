<?php

namespace App\Controladores\Secretaria;
use App\Modelos\Artesanados;


class RegistrarArtesanado{
    private $artesanados;


    public function __construct(

        Artesanados $artesanados
    )
    {
        $this->artesanados=$artesanados;
        
    }

    
    public function registrarArt($variables=[]){
        return [
            'titulo' => 'Registrar Artesanado',
            'template' => 'secretaria/registrarArtesanado.html.php',
            'variables'=> $variables
            
            
        ];
    }


    public function nuevoArtesanados(){

        if(empty($_FILES['url_foto']['name'])){
            return $this->registrarArt(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        $tmp = $_FILES['url_foto']['tmp_name'];
        $name = $_FILES['url_foto']['name'];
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;
        

        $add =[
            'idartesanado' => trim($_POST['idartesanado']),
            'categoria' => trim($_POST['categoria']), 
            'url_foto' => trim($outputImage), 
            'estado' => Artesanados::ESTADO_ACTIVO
        ];

        try{

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
               
    
            }
            $this ->artesanados->insert($add);
            
            return $this->registrarArt(['success'=>"Se ingreso correctamente los datos"]);
            
            
        }catch(\PDOException $e){
            return $this->registrarArt(['error'=>"No se ingresaron los datos"]);
            
        }

        
    
        

        
    }

}