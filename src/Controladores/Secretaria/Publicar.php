<?php

namespace App\Controladores\Secretaria;
use App\Modelos\Publicaciones;

class Publicar{
    private $publicaciones;

    public function __construct(Publicaciones $publicaciones){
        $this->publicaciones=$publicaciones;
    }

    public function publicarAnuncio($variables=[]){
        return [
            'titulo' => 'Publicar Anuncio',
            'template' => 'secretaria/publicar.html.php',
            'variables'=> $variables
        ];
    }


    public function anuncio(){

        if(empty($_FILES['foto_publicacion']['name'])){
            return $this->publicarAnuncio(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        $tmp = $_FILES['foto_publicacion']['tmp_name'];
        $name = $_FILES['foto_publicacion']['name'];
        $direccionJson = './src/Includes/imgpublicacion.json';
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;
        

        $agr =[
            'idpublicacion' => trim($_POST['idpublicacion']),
            'publicacion' => trim($_POST['publicacion']), 
            'fecha' => trim($_POST['fecha']),
            'foto_publicacion' => trim($outputImage),
            'estado' => Publicaciones::ESTADO_ACTIVO
            
        ];

        try{

            if(move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                $jsonImage = file_get_contents($direccionJson);// traemos el archivo json que contien la url de la imagen del logo
                $dataImage = json_decode($jsonImage,true);
                $dataImage['img'] = ltrim($outputImage,'.'); // le damos la nueva direccion del logo
                file_put_contents($direccionJson,json_encode($dataImage)); 
    
            }

            $this ->publicaciones->insert($agr);
            

                return[
                    'titulo' => 'Publicar Anuncio',
                    'template' => 'secretaria/publicar.html.php',
                    'variables' => [
                        'success' => 'Se registro correctamente el nuevo artesanado'
                    ]
                    ];
                
              
            
        }catch(\PDOException $e){
                return [
                    'titulo'=>'Publicar Anuncio',
                    'template'=>'secretaria/publicar.html.php',
                    'variables' => [ 
                        'error' => 'No se pudo registrar'
                        ] 
                     ];
        }
        
    }

    public function listadoPublicacion(){
  
        $publicaciones = $this->publicaciones->select();
     
            return [
                'titulo' => 'Listado de Anuncios',
                'template' => 'secretaria/listadoAnuncio.html.php',
                'variables' => ['publicaciones' => $publicaciones]
        ];
    }
 

    public function publica(){
        $dataPublicaciones = [];
        foreach($_POST as $publicaciones){
            if(isset($publicaciones['estado'])){
                array_push($dataPublicaciones,$publicaciones);
                
            }
        }
        $error = '';
        foreach($dataPublicaciones as $publicacion){
            $arten = $this->publicaciones->selectFromColumn('idpublicacion',$publicacion['idpublicacion'])[0];
            $estado = '';
            if($arten->estado === 'activo'){
                $estado = 'inactivo';
            }else{
                $estado = 'activo';
            }

            $dataFinalPublicaciones = [
                'estado' => $estado,
                'idpublicacion' => $publicacion['idpublicacion']
            ];

            try{
                $this->publicaciones->update($dataFinalPublicaciones);
            }catch(\PDOException $e){
                $error = 'Error: ' . $e->getMessage();
            }
        }
        return $this->listadoPublicacion();
       
    }
}