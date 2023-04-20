<?php

namespace App\Controladores\Secretaria;

use App\Modelos\Artesanados;
use App\Modelos\Artesanos;

class RegistrarArtesano{
    private $artesano;
    private $artesanados;
   
    public function __construct(
        Artesanos $artesano
        
    ){
        $this->artesano=$artesano;
        $this->artesanados= new Artesanados;

    }
    
        
    

    public function registrarA($variables=[]){

        $artesanados=$this->artesanados->select();
        $variables['artesanados']=$artesanados;

        return [
            'titulo' => 'Registrar Artesano',
            
            'template' => 'secretaria/registrar_artesano.html.php',
            'variables'=> $variables,
            
            
        ];
    }

    public function agregar(){

        if(empty($_FILES['foto']['name'])){
            return $this->registrarA(
                ['error' => 'Error no ingreso ninguna imagen']
            );
        }

        //Imagen de foto
        $tmp = $_FILES['foto']['tmp_name'];
        $name = $_FILES['foto']['name'];
       
        $DirecionImage = './assets/fotosartesanos/';
        $outputImage = $DirecionImage . $name;

        //Imagenes de trabajos 

        

        

        $data=[
            'idartesano' => $_POST['idartesano'],
            'foto' => trim($outputImage),
            'nombres' => $_POST['nombres'],
            'apellidos' => $_POST['apellidos'],
            'telefono' => $_POST['telefono'],
            'idartesanado' => $_POST['artesanado'],
           'correo' => $_POST['correo'],
           'direccion' => $_POST['direccion'],
            'rol' => Artesanos::ARTESANO,
            'calificacion' => $_POST['calificacion'],
            'clave' => password_hash($_POST['idartesano'],PASSWORD_DEFAULT),
            'estado' => Artesanos::ESTADO_ACTIVO,
            'imagen1' => $_POST['telefono'],
            'imagen2' => $_POST['telefono'],
            'imagen3' => $_POST['telefono'],
            'imagen4' => $_POST['telefono']
        
        ];
        

        try{

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            $this ->artesano->insert($data);
            

            return $this->registrarA(['success'=>"Se ingreso correctamente los datos"]);
              
            
        }catch(\PDOException $e){
                return $this->registrarA(['error'=>"No se guardaron los datos"]);
        }


    }


}