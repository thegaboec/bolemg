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

    
    public function registrarArt(){
        return [
            'titulo' => 'Registrar Artesanado',
            'template' => 'secretaria/registrarArtesanado.html.php',
            
            
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
        $direccionJson = './src/Includes/imgartesanado.json';
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;
        

        $add =[
            'idartesanado' => trim($_POST['idartesanado']),
            'categoria' => trim($_POST['categoria']), 
            'url_foto' => trim($outputImage), 
            'estado' => Artesanados::ESTADO_ACTIVO
        ];

        try{

            if(move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                $jsonImage = file_get_contents($direccionJson);// traemos el archivo json que contien la url de la imagen del logo
                $dataImage = json_decode($jsonImage,true);
                $dataImage['img'] = ltrim($outputImage,'.'); // le damos la nueva direccion del logo
                file_put_contents($direccionJson,json_encode($dataImage)); 
    
            }

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
                    'titulo'=>'Registrar Artesanado',
                    'template'=>'secretaria/registrarArtesanado.html.php',
                    'variables' => [
                        
                        'error' => 'No se pudo registrar'
                        ] 
                     ];
        }

        
    
        

        
    }

}