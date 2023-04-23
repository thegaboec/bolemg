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
        $tmp1 = $_FILES['imagen1']['tmp_name'];
        $name1 = $_FILES['imagen1']['name'];
        $tmp2 = $_FILES['imagen2']['tmp_name'];
        $name2 = $_FILES['imagen2']['name'];
        $tmp3 = $_FILES['imagen3']['tmp_name'];
        $name3 = $_FILES['imagen3']['name'];
        $tmp4 = $_FILES['imagen4']['tmp_name'];
        $name4 = $_FILES['imagen4']['name'];
       
        $DirecionImage = './assets/fotosartesanos/';
        $DirecionTrabajos = './assets/trabajosrealizados/';
        $outputImage = $DirecionImage . $name;
        $outputImage1 = $DirecionTrabajos . $name1;
        $outputImage2 = $DirecionTrabajos . $name2;
        $outputImage3 = $DirecionTrabajos . $name3;
        $outputImage4 = $DirecionTrabajos . $name4;

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
            'imagen1' => trim($outputImage1),
            'imagen2' => trim($outputImage2),
            'imagen3' => trim($outputImage3),
            'imagen4' => trim($outputImage4)
        
        ];
        

        try{

            if(!move_uploaded_file($tmp,$outputImage)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }

            if(!move_uploaded_file($tmp1,$outputImage1)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            if(!move_uploaded_file($tmp2,$outputImage2)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            if(!move_uploaded_file($tmp3,$outputImage3)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }
            if(!move_uploaded_file($tmp4,$outputImage4)){ // mueve la imagen guardada en el espacio temporal hacia la carpeta img permanentemente
                //para retornar un error
    
            }

            $this ->artesano->insert($data);
            

            return $this->registrarA(['success'=>"Se ingreso correctamente los datos"]);
              
            
        }catch(\PDOException $e){
                return $this->registrarA(['error'=>"No se guardaron los datos"]);
        }


    }


}