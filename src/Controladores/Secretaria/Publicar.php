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
       
        $DirecionImage = './assets/img/';
        $outputImage = $DirecionImage . $name;
        

        $agr =[
            'titulo' => ($_POST['titulo']),
            'publicacion' => ($_POST['publicacion']), 
            'fecha' => ($_POST['fecha']),
            'foto_publicacion' => ltrim($outputImage,'.'),
            'estado' => Publicaciones::ESTADO_ACTIVO
            
        ];

        try{

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                  
            }

            $this ->publicaciones->insert($agr);
            
            return $this->publicarAnuncio(['success'=>"Se ingreso correctamente los datos"]);
                
              
            
        }catch(\PDOException $e){
                
            return $this->publicarAnuncio(['error' => 'No se pudo registrar']);
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
        foreach($dataPublicaciones as $publicaciones){
            $pub = $this->publicaciones->selectFromColumn('idpublicaciones',$publicaciones['idpublicaciones'])[0];
            $estado = '';
            if($pub->estado === 'activo'){
                $estado = 'inactivo';
            }else{
                $estado = 'activo';
            }

            $dataFinalPublicaciones = [
                'estado' => $estado,
                'idpublicaciones' => $publicaciones['idpublicaciones']
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
